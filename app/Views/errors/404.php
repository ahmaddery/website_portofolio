<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= base_url('images/fevicon.png'); ?>" type="image/gif" />
    <title>404 - Not Found</title>
</head>
<style>
  * {
    box-sizing: border-box;
  }

  body {
    background-color: #0a0b3b;
    color: #fff;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
  }

  .container {
    text-align: center;
  }

  img {
    width: 200px;
    height: auto;
    margin-bottom: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    animation: fadeIn 2s ease-in-out;
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
    }
    to {
      opacity: 1;
    }
  }

  h1 {
    font-size: 4em;
    margin: 0;
    color: #4293ef;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
    animation: pulse 2s ease-in-out infinite;
  }

  @keyframes pulse {
    0% {
      transform: scale(1);
    }
    50% {
      transform: scale(1.2);
    }
    100% {
      transform: scale(1);
    }
  }

  p {
    font-size: 1.5em;
    margin: 0;
    margin-top: 20px;
    color: #ccc;
    animation: fadeInUp 1.5s ease-in-out;
  }

  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(20px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  a {
    display: inline-block;
    padding: 12px 24px;
    background-color: #4293ef;
    color: #fff;
    text-decoration: none;
    margin-top: 20px;
    font-size: 1.2em;
    border-radius: 50px;
    animation: bounce 1s ease-in-out infinite;
  }

  @keyframes bounce {
    0%, 20%, 50%, 80%, 100% {
      transform: translateY(0);
    }
    40% {
      transform: translateY(-10px);
    }
    60% {
      transform: translateY(-5px);
    }
  }

  @media (max-width: 768px) {
    h1 {
      font-size: 3em;
    }
    p {
      font-size: 1.2em;
    }
  }

  @media (max-width: 576px) {
    h1 {
      font-size: 2.5em;
    }
    p {
      font-size: 1em;
    }
    a {
      font-size: 1.2em;
    }
  }
</style>
<body>
  <div class="container">        
    <img src="<?= base_url('images/404.png'); ?>" alt="Ilustrasi 404">
    <h1>404 - Not Found</h1>
    <p>Maaf, sepertinya halaman yang Anda cari tidak ditemukan</p>
    <a href="<?= base_url('index'); ?>" title="Kembali ke halaman utama">Back To Home</a>
  </div>
</body>
</html>
