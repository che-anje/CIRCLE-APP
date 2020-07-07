## CIRCLE APP
====

## 概要
"CIRCLE APP"は自由にサークルを作って同じ趣味の人と繋がるイベントポータルサイトです。

## 制作背景
社会人になると会社の同僚以外で新たな友人を作りづらく、学生時代の友人は予定が合わず会えないことが多い。共通の趣味や休みの合う人たちと繋がれるアプリが欲しいと思い作成しました。

## 仕様・使い方
### ① 誰でも簡単にサークルを作れます
ログイン後、サークル作成へ進む から作成できます。
ジャンルを３つまで選択し、必須項目を埋めたら「作成する」で作成完了。
![./README_IMAGES/createCircle.gif](./README_IMAGES/createCircle.gif)

### ② サークルを探す
地域、カテゴリー、ジャンル、キーワードでの検索が可能です。
![./README_IMAGES/search_circle.gif](./README_IMAGES/search_circle.gif)
### ③ メンバー申請する
申請後、サークル管理者に参加メッセージが送信されます。
承認されるとサークルのグループチャットに参加できます。
![./README_IMAGES/apply_circle.gif](https://github.com/che-anje/portforio/blob/master/README_IMAGES/apply_circle.gif)
### ④ サークルのグループチャットで打ち合わせる
チャット内で話し合う。
![./README_IMAGES/message.gif](./README_IMAGES/message.gif)
### ⑤ レスポンシブデザイン対応
スマートフォン、タブレットでも気軽にご利用いただけます。

## 本番環境のURL
https://suketto.herokuapp.com

## 機能一覧
- ユーザー機能
    - 新規登録、ログイン、ログアウト機能
    - プロフィール作成、編集機能
    - プロフィール画像はS3に保管
- サークル機能
    - サークル作成、編集、削除機能
    - メンバー申請、承認機能
    - サークル画像はS3に保管
    - ソート機能(地域、カテゴリー、ジャンル、キーワード検索)
    - ランキング機能(毎日0時に自動集計、自動更新)
- チャット機能
    - 参加したサークル内でグループチャットができます。
    - 参加申請後、サークル管理者と個人チャットができます。

## 言語・環境
- PHP 7.4.3
- Laravel Framework 6.18.3
- MySQL  Ver 8.0.19
- JavaScript
- Jquery
- AWS(S3)

## データベース設計

## その他

## Author
崔 央載
anje19960225@gmail.com

