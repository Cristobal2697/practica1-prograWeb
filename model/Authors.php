<?php
// file: Authors.php

class Author extends Model
{

    static $authors = [
        [
            'id' => 1,
            'author' => 'Abraham Silberschatz',
            'nationality' => 'Israelis / American',
            'birth_year' => '1952',
            'fields' => 'Database Systems, Operating Systems',
            'book_id1' => '1',
            'book_id2' => '2',
            'book_title1' => 'Operating System Concepts',
            'book_title2' => 'Database System Concepts'
        ],
        [
            'id' => 2,
            'author' => 'Andrew S. Tanenbaum',
            'nationality' => 'Dutch / American',
            'birth_year' => '1944',
            'fields' => 'Distributed computing, Operating Systems',
            'book_id1' => '3',
            'book_id2' => '4',
            'book_title1' => 'Computer Networks',
            'book_title2' => 'Modern Operating Systems'
        ]
    ];

    public static function all()
    {
        return self::$authors;
    }

    public static function find($id)
    {
        foreach (self::$authors as $key => $author)
            if ($author['id'] == $id) return $author;
        return [];
    }
}
