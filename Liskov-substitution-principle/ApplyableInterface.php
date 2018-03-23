<?php
/**
 * Interface ApplyableInterface
 */
interface ApplyableInterface {
    /**
     * @return string
     */
    public function apply(): string;

    /**
     * @return string
     */
    public function getName(): string;
}
