<?php

function redireciona(string $url): void
{
    header("location: $url");
    die();
}