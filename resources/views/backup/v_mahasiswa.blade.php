<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Custom fonts for this template-->
  <link href="css?family=Roboto:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link rel="stylesheet" href="/css/style-backup.css">
  <style>
    table {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        border-collapse: collapse;
        width: 1000px;
        height: auto;
        border: 1px solid #bdc3c7;
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
    
    tr {
        transition: all .2s ease-in;
        cursor: pointer;
        background: white;
    }
    
    th{
      padding: 1rem 1rem 1rem 1rem;
      text-align: center;
      border-bottom: 1px solid #ddd;
    }
    td {
        padding: 6px 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    
    #header {
        background-color: #f1832c ;
        color: #fff;
    }
    
    tr:hover {
        background-color: #f5f5f5;
        transform: scale(1.02);
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
    
    @media only screen and (max-width: 768px) {
        table {
            width: 90%;
        }
    }
  </style>
  <title>Mahasiswa</title>
</head>
<body>
  <nav>
    <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
    <label class="logo"><a href="/">elnino.</a></label>
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="/about">About</a></li>
      <li><a href="/mahasiswa">Mahasiswa</a></li>
    </ul>
  </nav>
  <div class="container">
    <section id="main">
      <table>
        <tr id="header">
            <th>Nama</th>
            <th>NIM</th>
            <th>Mata Kuliah</th>
            <th>Semester</th>
            <th>Dosen</th>
        </tr>
        <tr>
            <td>{{$nama}}</td>
            <td>{{$nim}}</td>
            <td>{{$mk}}</td>
            <td>{{$semester}}</td>
            <td>{{$dosen}}</td>

        </tr>
      </table>
    </section>
  </div>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
<footer style="margin: 13px 0 0rem 0;" id="main-footer">
  <p>Copyright &copy; 2021 Nibros Ari Wibowo</p>
</footer>
</html>
