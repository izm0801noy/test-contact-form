@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">

@endsection

@section('content')
<div class="confirm__content">
  <div class="confirm__heading">
    <h2>Confirm</h2>
  </div>
  
  <form class="form" action="/contacts" method="post">
    @csrf
    <div class="confirm-table">
      <table class="confirm-table__inner">
        <tr class="confirm-table__row">
          <th class="confirm-table__header">お名前</th>
          <td class="confirm-table__text">
            <input type="text" name="name" placeholder="山田 太郎" value="" readonly />
          </td>
        </tr>

        <tr class="confirm-table__row">
          <th class="confirm-table__header">性別</th>
          <td class="confirm-table__text">
            <input type="gender" name="gender" placeholder="男性 "value="" readonly />
          </td>
       </tr>
        
        <tr class="confirm-table__row">
          <th class="confirm-table__header">メールアドレス</th>
          <td class="confirm-table__text">
            <input type="email" name="email" placeholder="test@example.com" value="" readonly />
          </td>
        </tr>

        <tr class="confirm-table__row">
          <th class="confirm-table__header"></th>
          <td class="confirm-table__text">
            <input type="address" name="address"placeholder="08012345678"  value="" readonly />
          </td>
        </tr>

        <tr class="confirm-table__row">
          <th class="confirm-table__header"></th>
          <td class="confirm-table__text">
            <input type="building" name="building" placeholder="東京都渋谷区千駄ヶ谷1-2-3" value="" readonly />
          </td>
        </tr>

        <tr class="confirm-table__row">
          <th class="confirm-table__header"></th>
          <td class="confirm-table__text">
            <input type="category" name="category" placeholder="商品の交換について" value="" readonly />
          </td>
        </tr>

        <tr class="confirm-table__row">
          <th class="confirm-table__header"></th>
          <td class="confirm-table__text">
            <input type="text" name="content" placeholder="届いた商品が注文した商品ではありませんでした。商品の取り換えをお願いします。" value="" readonly />
          </td>
        </tr>
      </table>
    </div>
    <div class="form__button">
      <button class="form__button-submit" type="submit">送信</button>
      <a class="form__button-submit--correction" href="/">修正</a>
    </div>
  </form>
</div>-
@endsection
