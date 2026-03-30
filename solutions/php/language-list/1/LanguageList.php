<?php

function language_list(...$languages)
{
    return [...$languages];
}

function add_to_language_list(array $languages, $new_language)
{
    $languages[] = $new_language;
    return $languages;        
}

function prune_language_list(array $languages) {
    array_shift($languages);
    return $languages;
}

function current_language(array $languages) {
    return $languages[0];
}

function language_list_length(array $languages) {
    return count($languages);
}