@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="contact__content">
    <table class="contact__table">
        <h2 class="contact__header">
            Contact
        </h2>
        <tr class="contact-table__row">
            <th>
                <span class="ttl">お名前</span>
                <span class="required">※</span>
            </th>
            <td>
                <input class="first_name" type="text" placeholder="例:山田">
                <input class="last_name" type="text" placeholder="例:太郎">
            </td>
           
        </tr>
        <tr class="contact-table__row">
            <th>
                <span class="ttl">性別</span>
                <span class="required">※</span>
            </th>
            <td>
                <input type="radio" name="sex" value="man">男性 <input type="radio" name="sex" value="female">女性 <input type="radio" name="sex" value="other">その他
            </td>
        </tr>
        <tr class="contact-table__row">
            <th>
                <span class="ttl">メールアドレス</span>
                <span class="required">※</span>
            </th>
            <td>
                <input class="E-mail" type="text" placeholder="例:test@example.com">
            </td>
        </tr>
        <tr class="contact-table__row">
            <th>
                <span class="ttl">電話番号</span>
                <span class="required">※</span>
            </th>
            <td>
                <input class="tel" type="text" name="tel[0]" placeholder="080">
                -
                <input class="tel" type="text" name="tel[1]" placeholder="1234">
                -
                <input class="tel" type="text" name="tel[2]" placeholder="5678">
            </td>
        </tr>
        <tr class="contact-table__row">
            <th>
                <span class="ttl">住所</span>
                <span class="required">※</span>
            </th>
            <td>
                <input class="address" type="text" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3">
            </td>
        </tr>
        <tr class="contact-table__row">
            <th>
                <span class="ttl">建物名</span>
            </th>
            <td>
                <input type="text" placeholder="例:千駄ヶ谷マンション101">
            </td>
        </tr>
        <tr class="contact-table__row">
            <th>
                <span class="ttl">お問い合わせの種類</span>
                <span class="required">※</span>
            </th>
            <td class="select_wrapper">
                <select>
                    <option value="" disabled selected>選択してください</option>
                    <option value="">商品のお届けについて</option>
                    <option value="">商品の交換について</option>
                    <option value="">商品トラブル</option>
                    <option value="">ショップへのお問い合わせ</option>
                    <option value="">その他</option>
                </select>
            </td>
        </tr>
        <tr class="contact-table__row">
            <th>
                <span class="ttl">お問い合わせ内容</span>
                <span class="required">※</span>
            </th>
            <td class="input-field">
                <textarea placeholder="お問い合わせ内容をご記載ください"></textarea>
            </td>
        </tr>
    </table>
    <div class="submit-btn">
        <input type="submit" value="確認画面">
    </div>
</div>
@endsection