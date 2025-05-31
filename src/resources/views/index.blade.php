<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FashionablyLate</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
      FashionablyLate
      </a>
    </div>
  </header>

  <main>
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Contact</h2>
      </div>
      <form class="form">
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" id="last-name" name="last-name" placeholder="例：山田" />
            </div>
            <div class="form__input--text">
      <input type="text" id="first-name" name="first-name" placeholder="例：太郎" />
    </div>
    <div class="form__group-gender">
            <span class="form__label--item">性別</span>
            <span class="form__label--required">※</span>
            <label>性別:</label>
            <input type="radio" id="male" name="gender" value="male" required>
            <label for="male">男性</label>
            <input type="radio" id="female" name="gender" value="female" required>
            <label for="female">女性</label>
            <input type="radio" id="other" name="gender" value="other" required>
            <label for="other">その他</label>
    </div>
    
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="test@example.com" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content phone-input-group">
    <input type="tel" id="tel-part1" name="tel_part1" maxlength="3" pattern="\d*" inputmode="numeric" placeholder="例：090" required>
    <span>-</span>
    <input type="tel" id="tel-part2" name="tel_part2" maxlength="4" pattern="\d*" inputmode="numeric" placeholder="例：1234" required>
    <span>-</span>
    <input type="tel" id="tel-part3" name="tel_part3" maxlength="4" pattern="\d*" inputmode="numeric" placeholder="例：5678" required>
    </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
          </div>
          
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="content" placeholder="資料をいただきたいです"></textarea>
            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">送信</button>
        </div>
      </form>
    </div>
  </main>
</body>

</html>
