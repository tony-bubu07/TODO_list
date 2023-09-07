<!-- 以下ページ共通 flatpickr sprict 部品 -->

<!-- /tasks/create.blade.php（タスク作成ページ）-->
<!-- /tasks/edit.blade.php（タスク編集ページ） -->

<!-- flatpickrスクリプト -->
<script src="https://npmcdn.com/flatpickr/dist/flatpickr.min.js"></script>
<!-- 日本語化のための追加スクリプト -->
<script src="https://npmcdn.com/flatpickr/dist/l10n/ja.js"></script>

<!-- flatpickr の機能を有効化 -->
<script>
    // 第一引数に flatpickr で日付選択を行わせたい要素を指定し、第二引数にオプションを渡す
    flatpickr(document.getElementById('due_date'), {
        // 言語設定のフォーマットのオプション
        locale: 'ja',
        // 日付表記のフォーマットのオプション
        dateFormat: "Y/m/d",
        // 今日の日付より前の日付（過去）は入力不可にするオプション
        minDate: new Date()
    });
</script>