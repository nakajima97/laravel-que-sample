<!-- メインコンテンツの表示 -->
<div class="container mx-auto px-4 py-8">
  <!-- 記事一覧 -->
  <div class="mb-8">
    <h2 class="text-2xl font-bold mb-4">掲示板</h2>
    <div class="border rounded-lg p-4">
      <!-- 記事のループ表示 -->
      <div class="mb-4">
        <h3 class="text-lg font-semibold mb-2">タイトル1</h3>
        <p class="text-gray-600 mb-2">投稿者: John Doe</p>
        <p class="text-gray-600">投稿日時: 2023-05-22</p>
      </div>
      <div class="mb-4">
        <h3 class="text-lg font-semibold mb-2">タイトル2</h3>
        <p class="text-gray-600 mb-2">投稿者: Jane Smith</p>
        <p class="text-gray-600">投稿日時: 2023-05-23</p>
      </div>
      <!-- 記事のループ表示終了 -->
    </div>
  </div>

  <!-- 新規記事投稿フォーム -->
  <div class="mb-8">
    <h2 class="text-2xl font-bold mb-4">新規投稿</h2>
    <form class="border rounded-lg p-4">
      <div class="mb-4">
        <label for="title" class="block text-gray-700 font-semibold mb-2">タイトル</label>
        <input type="text" id="title" class="w-full border rounded p-2" placeholder="タイトルを入力してください">
      </div>
      <div class="mb-4">
        <label for="content" class="block text-gray-700 font-semibold mb-2">内容</label>
        <textarea id="content" class="w-full border rounded p-2" placeholder="内容を入力してください"></textarea>
      </div>
      <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">投稿する</button>
    </form>
  </div>
</div>
