<turbo-stream target="@domid($post)" action="replace">
    <template>
        @include('posts._post', ['post' => $post])
    </template>
</turbo-stream>

<turbo-stream target="@domid($post, 'card')" action="replace">
    <template>
        @include('posts._post_card', ['post' => $post])
    </template>
</turbo-stream>
