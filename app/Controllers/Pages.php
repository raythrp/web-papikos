<?php

namespace App\Controllers;

use App\Models\ActiveModel;
use App\Models\KosModel;
use App\Models\PemilikModel;
use App\Models\PenyewaModel;
use CodeIgniter\Debug\Toolbar\Collectors\Views;

class Pages extends BaseController
{
    public function index()
    {
        echo "Keren juga kamu sudah login";
    }

    public function dashboard()
    {
        $kosModel = new KosModel();
        $data = [
            'title' => 'Papi Kos',
            'theme' => 'base',
            'kosGKPN' => $kosModel->findKategori('GKPN'),
            'kosCikuda' => $kosModel->findKategori('Cikuda'),
            'kosKampungGeulis' => $kosModel->findKategori('Kampung Geulis')
        ];
        return view('layout/template', $data) . view('layout/loggedInNav') . view('pages/dashboard') . view('layout/footer');
    }

    public function landing()
    {
        $data = [
            'title' => 'Papi Kos',
            'theme' => 'base',
        ];
        return view('layout/template', $data) . view('layout/navbar') . view('pages/landingpage') . view('layout/footer');
    }
    public function login()
    {
        $data = [
            'title' => 'Login',
        ];

        $pemilikModel = new PemilikModel();
        $penyewaModel = new PenyewaModel();

        if ($this->request->getPost("login")) {
            $username = $this->request->getPost("email");
            $password = $this->request->getPost("password");
            $admin = true;

            if ($username == "" || $password == "") {
                $error = "Ada yang kosong tuh!";
            }

            if (empty($pemilikModel->getData($username))) {
                if (empty($penyewaModel->getData($username))) {
                    $error = "Kayanya kamu harus daftar dulu deh";
                } else $loginData = $penyewaModel->getData($username);
                $admin = false;
            } else $loginData = $pemilikModel->getData($username);

            if (empty($error)) {
                if ($loginData['password'] != MD5($password)) {
                    $error = "Eits! Coba ingat-ingat lagi";
                }
            }

            if (empty($error) && !$admin) {
                session()->set($loginData);
                return redirect()->to("/dashboard");
            } else if (empty($error) && $admin) {
                session()->set($loginData);
                return redirect()->to(site_url('admin/' . $username));
            }

            if ($error) {
                session()->setFlashdata("error", $error);
                session()->setFlashdata('username', $username);
                return redirect()->to("/login");
            }
        }
        return view('layout/template', $data) . view('layout/navbar') . view('pages/login');
    }
    public function register()
    {
        $data = [
            'title' => 'Register',
        ];

        $model = new PenyewaModel();

        if ($this->request->getPost('register')) {
            $username = $this->request->getPost('email');
            $password = $this->request->getPost("password");

            if ($username == "" or $password == "") {
                $error = "Ada yang kosong tuh!";
            }

            if (empty($error)) {
                $existingUsername = $model->getData($username);

                if (empty($existingUsername)) {
                    $loginData = [
                        'email' => $username,
                        'password' => MD5($password),
                        'nama' => $this->request->getPost('nama'),
                        'nomor_telepon' => $this->request->getPost('notelp'),
                        'alamat' => $this->request->getPost('alamat'),
                        'tanggal_masuk' => "",
                        'tanggal_keluar' => ""
                    ];
                    $model->insertData($loginData);
                    session()->set($loginData);

                    return redirect()->to('/dashboard');
                } else {
                    $error = "Tampaknya kamu sudah terdaftar";
                }
            }

            if ($error) {
                session()->setFlashdata('error', $error);
                return redirect()->to('/register');
            }
        }
        return view('layout/template', $data) . view('layout/navbar') . view('pages/register');
    }

    public function logout()
    {
        session_abort();
        return redirect()->to('/');
    }

    public function search()
    {
        $kosModel = new KosModel();
        $data = [
            'title' => 'Search',
            'kos' => $kosModel->getData(),
        ];

        return view('layout/template', $data) . view('layout/loggedInNav') . view('pages/search') . view('layout/footer');
    }

    public function detail()
    {
        $uri = service('uri');
        $id_kos = $uri->getSegment('2');
        $kosModel = new KosModel();
        $data = [
            'title' => 'Detail',
            'kos' => $kosModel->findData($id_kos),
        ];

        return view('layout/template', $data) . view('layout/loggedInNav') . view('pages/detail') . view('layout/footer');
    }

    public function profile()
    {
        $uri = service('uri');
        $email = $uri->getSegment('2');
        $penyewaModel = new PenyewaModel();
        $data = [
            'title' => 'Profile',
            'penyewa' => $penyewaModel->getData($email)
        ];

        return view('layout/template', $data) . view('layout/loggedInNav') . view('pages/profile') . view('layout/footer');
    }

    public function statusSewa()
    {
        $uri = service('uri');
        $email = $uri->getSegment('2');
        $activeModel = new ActiveModel();
        $kosModel = new KosModel();
        $penyewaModel = new PenyewaModel();

        if (!$id_kos = $activeModel->getid_kos($email))
        {
            $id_kos = $activeModel->getid_kos($email);
            $data = [
                'title' => 'Status',
                'kos' => (object)[
                    'id_kos' => 0,
                    'nama' => 'Kamu belum bersama papi',
                    'kategori' => 'Tidak Tahu',
                    'harga' => 0,
                    'fasilitas' => 'Kosnya aja tidak ada'
                ],
                'penyewa' => $penyewaModel->getData($email)
            ];
        }
        else {
            $data = [
                'title' => 'Status',
                'kos' => $kosModel->findData($id_kos['id_kos']),
                'penyewa' => $penyewaModel->getData($email)
            ];
        }

        return view('layout/template', $data) . view('layout/loggedInNav') . view('pages/status') . view('layout/footer');
    }

    public function admin($email)
    {
        $uri = service('uri');
        $email = $uri->getSegment('2');
        $kosModel = new KosModel();
        $data = [
            'title' => 'Admin',
            'kos' => $kosModel->findPemilik($email)
        ];

        return view('layout/template', $data) . view('layout/loggedInNav') . view('pages/admin') . view('layout/footer');
    }
    public function adminDetail()
    {
        $uri = service('uri');
        $id_kos = $uri->getSegment('2');
        $kosModel = new KosModel();
        $activeModel = new ActiveModel();
        $data = [
            'title' => 'Admin',
            'kos' => $kosModel->findData($id_kos),
            'active' => $activeModel->getCount($id_kos)
        ];

        return view('layout/template', $data) . view('layout/loggedInNav') . view('pages/adminDetail') . view('layout/footer');
    }

    public function updateProfile()
    {
        $penyewaModel = new PenyewaModel();
        $uri = service('uri');
        $email = $uri->getSegment('2');

        $data = [
            'nama' => $this->request->getPost('nama'),
            'nomor_telepon' => $this->request->getPost('notelp'),
            'email' => $this->request->getPost('email'),
            'alamat' => $this->request->getPost('alamat'),
        ];

        $penyewaModel->updateData($email, $data);

        return redirect()->to('profile/' . $email);
    }

    public function proses()
    {
        $penyewaModel = new PenyewaModel();
        $kosModel = new KosModel();
        $activeModel = new ActiveModel();
        $uri = service('uri');
        $id_kos = $uri->getSegment('2');
        $email_pemilik = $uri->getSegment('3');
        $email_penyewa = $uri->getSegment('4');

        if(empty($activeModel->where('email_penyewa', $email_penyewa)->get()->getResult()))
        {
            //Update Tabel Penyewa
            $tanggalMasuk = $this->request->getPost('tanggal_masuk');
            $tanggalKeluar = date('Y-m-d', strtotime($tanggalMasuk . ' +1 year'));
            $data = [
                'tanggal_masuk' => $tanggalMasuk,
                'tanggal_keluar' => $tanggalKeluar
            ];
            $penyewaModel->updateData($email_penyewa, $data);

            //Insert Tabel Active
            $data = [
                'id_kos' => $id_kos,
                'email_penyewa' => $email_penyewa,
                'email_pemilik' => $email_pemilik
            ];
            $activeModel->insertData($data);

            //Update Tabel Kos
            $jumlah_kamar = $kosModel->findData($id_kos)->jumlah_kamar;
            $data = [
                'jumlah_kamar' => $jumlah_kamar - 1
            ];
            $kosModel->updateData($id_kos, $data);
            return redirect()->to('/statusSewa/' . $email_penyewa);
        }
        else return redirect()->to('/detail/' . $id_kos);
    }

    public function stopSewa()
    {
        
        $penyewaModel = new PenyewaModel();
        $kosModel = new KosModel();
        $activeModel = new ActiveModel();
        $uri = service('uri');
        $id_kos = $uri->getSegment('2');
        $email_penyewa = $uri->getSegment('3');

        if ($activeModel->where('email_penyewa', $email_penyewa)->get()->getResult())
        {
            $data = [
                'tanggal_masuk' => '',
                'tanggal_keluar' => ''
            ];
            $penyewaModel->updateData($email_penyewa, $data);

            //Delete Tabel Active
            $activeModel->deleteData($email_penyewa);

            //Update Tabel Kos
            $jumlah_kamar = $kosModel->findData($id_kos)->jumlah_kamar;
            $data = [
                'jumlah_kamar' => $jumlah_kamar + 1
            ];
            $kosModel->updateData($id_kos, $data);
            return redirect()->to('/statusSewa/' . $email_penyewa);
        }
        else return redirect()->to('/statusSewa/' . $email_penyewa);
    }
}
