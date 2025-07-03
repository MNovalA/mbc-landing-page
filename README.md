--- Landing Page - MBC Laboratory ---

Website ini dibuat untuk menampilkan informasi profil, layanan, kontak, dan developer MBC Laboratory secara interaktif dan profesional.<p/>

--- Struktur Proyek ---
/mbc-lab/</p>
│</p>
|-- index.html # Halaman utama</p>
|-- contact.php # Backend form kontak (PHP)</p>
|-- style.css # Styling tampilan</p>
|-- logo mbc.webp # Logo Laboratorium

<p>--- Cara Menjalankan (Lokal) ---</p>
1. Install [XAMPP](https://www.apachefriends.org)
2. Taruh folder proyek ke `C:\xampp\htdocs\mbc-lab`
3. Jalankan Apache dari XAMPP
4. Buka browser dan ketik:  
   `http://localhost/mbc-lab`<p/>

<p>--- Deployment ---</p>
Website ini dideploy ke platform **Vercel**  
🔗 https://mbc-landing-page-six.vercel.app/<p/>

<p>--- Konfigurasi HTTPS (SSL) ---</p>
- Vercel secara otomatis mengaktifkan HTTPS menggunakan Let's Encrypt
- Tidak diperlukan setup manual<p/>

<p>--- Backend (PHP) ---</p>
- Form kontak dikendalikan oleh `contact.php` dan bekerja di server lokal (XAMPP).
- Formulir kontak pada halaman kontak menggunakan file `contact.php`
- Versi awal hanya menampilkan data yang dikirim
- Dapat dikembangkan dengan `PHPMailer` atau `EmailJS` untuk mengirim email langsung<p/>
  
<p>--- Developer ---</p>
- **Nama:** Muhammad Noval Agustian  
- **GitHub:** [https://github.com/MNovalA](https://github.com/MNovalA)  
- **Email:** novalagustian43@gmail.com
