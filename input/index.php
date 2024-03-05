<!DOCTYPE html>
<html lang="js">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <title>お問合せフォーム</title>
</head>
<body>
  <form action="" method="post">
    <table class="table table-borderless">
      <tbody>
        <tr>
          <div class="mb-3">
            <td>氏名</td>
            <td>
              <input name="name" class="form-control">
            </td>
          </div>
        </tr>
        <tr>
          <div class="mb-3">
            <td>フリガナ</td>
            <td>
              <input name="kana" class="form-control">
            </td>
          </div>
        </tr>
        <tr>
          <div class="mb-3">
            <td>メールアドレス</td>
            <td>
              <input name="email" class="form-control">
            </td>
          </div>
        </tr>
        <tr>
          <div class="mb-3">
            <td>電話番号</td>
            <td>
              <input name="kana" class="form-control">
            </td>
          </div>
        </tr>
        <tr>
          <div class="mb-3">
            <td>郵便番号</td>
            <td>
              <input name="kana" class="form-control">
            </td>
          </div>
        </tr>
        <tr>
          <div class="mb-3">
            <td>住所</td>
            <td>
              <input name="kana" class="form-control">
            </td>
          </div>
        </tr>
        <tr>
          <div class="form-check form-check-inline">
            <td>性別</td>
            <td>
              <input name="gender" id="man" type="radio">
              <label class="form-check-label">男</label>
              <span>　　　</span>
              <input name="gender" id="woman" type="radio">
              <label class="form-check-label">女</label>
            </td>
          </div>
        </tr>
        <tr>
          <div class="mb-3">
            <td>お問合せ項目</td>
            <td>
              <select class="form-select" aria-label="Default select example">
                <option selected>---選択してください---</option>
                <option value="1">検定試験の申込について</option>
                <option value="2">語学コースの申込について</option>
                <option value="3">その他</option>
              </select>
            </td>
          </div>
        </tr>
        <tr>
          <div class="mb-3">
            <td>具体的な内容</td>
            <td>
              <textarea name="content" class="form-control"></textarea>
            </td>
          </div>
        </tr>
      </tbody>
    </table>
    <div class="d-grid gap-2 col-6 mx-auto">
      <input class="btn btn-secondary" type="submit">
    </div>
  </form>
  


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>