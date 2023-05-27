<div class="mb-4">
    <h3 class="font-semibold">{{ empty($authorName) ? "名無しさん" : $authorName }}</h3>
    <p class="text-gray-500">投稿日時: {{ $createdAt }}</p>
    <p>{{ $comment }}</p>
</div>