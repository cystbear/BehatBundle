<?php

namespace Behat\BehatBundle\Console\Processor;

use Symfony\Component\DependencyInjection\ContainerInterface,
    Symfony\Component\Console\Input\InputInterface,
    Symfony\Component\Console\Output\OutputInterface;

use Behat\Behat\Console\Processor\RerunProcessor as BaseProcessor;

/*
 * This file is part of the Behat\BehatBundle.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Rerun processor.
 *
 * @author      Konstantin Kudryashov <ever.zet@gmail.com>
 */
class RerunProcessor extends BaseProcessor
{
    /**
     * {@inheritdoc}
     */
    public function process(ContainerInterface $container, InputInterface $input, OutputInterface $output)
    {
        // throw exception on --rerun if no features argument provided
        if (!$input->getArgument('features') && $input->getOption('rerun')) {
            throw new \InvalidArgumentException('Provide features argument in order to use rerun');
        }

        parent::process($container, $input, $output);
    }
}
