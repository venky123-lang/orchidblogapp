<?php

namespace App\Orchid\Layouts;

use App\Models\Post;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Table;

class PostListLayout extends Table
{
    /**
     * Data source.
     *
     * @var string
     */
    public $target = 'posts';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('title', 'Title')
                ->sort()
                ->filter(Input::make())
                ->render(function (Post $post) {
                    return Link::make($post->title)
                        ->route('platform.post.edit', $post);
                }),

            TD::make('hero', 'Hero')
                ->sort()
                ->render(function (Post $post) {
                    return Link::make($post->hero)
                        ->route('platform.post.edit', $post);
                }),

            TD::make('description', 'Description')
                ->sort()
                ->render(function (Post $post) {
                    return Link::make($post->description)
                        ->route('platform.post.edit', $post);
                }),

            TD::make('author', 'Author')
                ->sort()
                ->render(function (Post $post) {
                    return Link::make($post->author)
                        ->route('platform.post.edit', $post);
                }),
            TD::make('body', 'Body')
                ->sort()
                ->render(function (Post $post) {
                    return Link::make($post->body)
                        ->route('platform.post.edit', $post);
                }),

            TD::make('created_at', 'Created')
                ->sort(),
            TD::make('updated_at', 'Last edit')
                ->sort(),
        ];
    }
}