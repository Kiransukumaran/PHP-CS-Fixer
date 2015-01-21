<?php

/*
 * This file is part of the PHP CS utility.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Symfony\CS\Fixer\Symfony;

use Symfony\CS\AbstractLinesBeforeNamespaceFixer;
use Symfony\CS\Tokenizer\Tokens;

/**
 * @author Graham Campbell <graham@mineuk.com>
 */
class SingleBlankLineBeforeNamespaceFixer extends AbstractLinesBeforeNamespaceFixer
{
    /**
     * {@inheritdoc}
     */
    public function fix(\SplFileInfo $file, Tokens $tokens)
    {
        foreach (array_keys($tokens->findGivenKind(T_NAMESPACE)) as $index) {
            $this->fixLinesBeforeNamespace($tokens, $index, 2);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        return 'There should be exactly one blank line before a namespace declaration.';
    }
}