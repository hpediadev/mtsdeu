<!DOCTYPE html>
<html>
<head>
    <title>Membuat form validation dengan | MalasNgoding.com</title>
</head>
<body>
        <?php 
            echo validation_errors();
        ?>
    <?php echo form_open('home/simpan'); ?>
        <label>NPSN</label><br/>
        <input type="text" name="npsn"><br/>
        <label>NAMA INSTANSI</label><br/>
        <input type="text" name="nama"><br/>
        <label>JENIS INSTANSI</label><br/>
        <input type="text" name="jenis"><br/>
        <label>EMAIL INSTANSI</label><br/>
        <input type="text" name="email"><br/>
        <label>ALAMAT INSTANSI</label><br/>
        <input type="text" name="alamat"><br/>
        <label>TELP</label><br/>
        <input type="text" name="telp"><br/>
        <label>HP</label><br/>
        <input type="text" name="hp"><br/>
        <label>FAX</label><br/>
        <input type="text" name="fax"><br/>
        <label>FACEBOOL</label><br/>
        <input type="text" name="fb"><br/>
        <label>TWITTER</label><br/>
        <input type="text" name="tw"><br/>
        <label>INSTAGRAM</label><br/>
        <input type="text" name="ig"><br/>
        <label>YOUTUBE</label><br/>
        <input type="text" name="yt"><br/>
        <label>KEPALA SEKOLAH</label><br/>
        <input type="text" name="kpl"><br/>
        <label>LOGO</label><br/>
        <input type="text" name="logo"><br/>
        <label>NAMA ADMIN</label><br/>
        <input type="text" name="ops"><br/>
        <label>NAMA PENGUNA ADMIN</label><br/>
        <input type="text" name="usr"><br/>
        <label>KATA SANDI ADMIN</label><br/>
        <input type="text" name="pass"><br/>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>