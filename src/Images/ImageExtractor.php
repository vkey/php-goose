<?php

namespace Goose\Images;

abstract class ImageExtractor {
    abstract public function getBestImage($article);
}
