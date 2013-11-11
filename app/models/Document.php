<?php

class Document extends Adamgoose\PrismicIo\Model
{
    protected $endpoint = 'https://frcteam28.prismic.io/api';
    public $collection = 'articles';

    public function link()
    {
        return "<a href='/{$this->getSlug()}'>{$this->title}</a>";
    }

    public function author()
    {
        return Author::at('author.id', $this->get('article.author')->asText());
    }
}
