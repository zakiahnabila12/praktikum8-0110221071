<?php
class Mahasiswa extends CI_Controller{
    //membuat method index
    public function index(){
        $this->load->model('mahasiswa_model','mhs1');

        //buat objek model 1
        $this->mhs1->id = 1;
        $this->mhs1->nim = '0001';
        $this->mhs1->nama = 'Zakiah';
        $this->mhs1->gender = 'P';
        $this->mhs1->ipk = 4.00;

        $this->load->model('mahasiswa_model','mhs2');
        $this->mhs2->id = 2;
        $this->mhs2->nim = '0002';
        $this->mhs2->nama = 'Nabila';
        $this->mhs2->gender = 'P';
        $this->mhs2->ipk = 3.45;

        // simpan ke array
        $list_mhs = [$this->mhs1, $this->mhs2];
        //kirim ke view
        $data['list_mhs'] = $list_mhs;
        //reorder data ke view
        $this->load->view('mahasiswa/index', $data);
    }
        
    //method dosen
        public function dosen(){
            $this->load->model('dosen_model', 'ds1');

            //buat objek dosen 1
            $this->ds1->nidn = '001';
            $this->ds1->pendidikan = 'S1';

            $this->load->model('dosen_model','ds2');

            //buat objek dosen 2
            $this->ds2->nidn = '002';
            $this->ds2->pendidikan = 'S2';

            //simpan ke array
            $list_ds = [$this->ds1, $this->ds2];
            //kirim ke view 
            $data2['list_ds'] = $list_ds;
            //Render ke view
            $this->load ->view('mahasiswa/dosen', $data2);

        }

        //method mata kuliah
        public function matakuliah(){
            $this->load->model('matakuliah_model','mk1');

            //buat objek mata kuliah 1
            $this->mk1->nama = 'Pemrograman Web';
            $this->mk1->sks = '3';
            $this->mk1->kode = 'PW';

            $this->load->model('matakuliah_model','mk2');

             //buat objek mata kuliah 2
             $this->mk2->nama = 'Basis Data';
             $this->mk2->sks = '2';
             $this->mk2->kode = 'BD';

             //simpan ke array
             $list_mk = [$this->mk1, $this->mk2];
             //kirim ke view
             $data3['list_mk'] = $list_mk;
             //render ke view
             $this->load->view('mahasiswa/matakuliah', $data3);

        }

   
}
?>
