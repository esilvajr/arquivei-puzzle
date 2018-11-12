<?php

require_once getcwd()."/vendor/autoload.php";


/**
 *
 * Write a program that prints the temperature closest to 0 among input data.
 * If two numbers are equally close to zero,
 * positive integer has to be considered closest to zero (for instance,
 * if the temperatures are -5 and 5, then display 5).
 *
 * A string with the N temperatures expressed as integers ranging from -273 to 5526
 *
 * Display 0 (zero) if no temperatures are provided. Otherwise, display the temperature closest to 0.
 *
 */

$useCase = new \Arquivei\Recruiter\Modules\NextZero\UseCases\Generator\UseCase();
$useCase->execute();
//var_dump($useCase->getResponse());

$otherUseCase = new \Arquivei\Recruiter\Modules\NextZero\UseCases\Verificator\UseCase();
$otherUseCase->execute($useCase->getResponse());

//var_dump($otherUseCase->getResponse());


/**
 * LongText
 * Write a program that prints the words that has less than three (3) letters.
 *
 * The output must be the words separated by hyphen (abc-def-ghi)
 *
 * All words in the output must be in lowercase.
 */

$anotherUseCase = new \Arquivei\Recruiter\Modules\LongText\UseCases\Generator\UseCase();
$anotherUseCase->execute();
//var_dump($anotherUseCase->getResponse());

$anotherOtherUseCase = new \Arquivei\Recruiter\Modules\LongText\UseCases\Verificator\UseCase();
$anotherOtherUseCase->execute($anotherUseCase->getResponse());
//var_dump($anotherOtherUseCase->getResponse());


/**
 * ClosestString
 *
 * Write a program that prints the word in a list of words by its approximation
 *
 * The output must be the correctly word.
 *
 */
$anotherOneUseCase = new \Arquivei\Recruiter\Modules\ClosestString\UseCases\Generator\UseCase();
$anotherOneUseCase->execute();
//var_dump($anotherOneUseCase->getResponse());

$anotherOneAnotherUseCase = new \Arquivei\Recruiter\Modules\ClosestString\UseCases\Verificator\UseCase();
$anotherOneAnotherUseCase->execute($anotherOneUseCase->getResponse());
//var_dump($anotherOneAnotherUseCase->getResponse());

/**
 *
 * EventOrder
 *
 */
$eventGeneratorUseCase = new \Arquivei\Recruiter\Modules\EventOrder\UseCases\Generator\UseCase();
$eventGeneratorUseCase->execute();
//var_dump($eventGeneratorUseCase->getResponse());

$eventVerificatorUseCase = new \Arquivei\Recruiter\Modules\EventOrder\UseCases\Verificator\UseCase();
$eventVerificatorUseCase->execute(['events' => $eventGeneratorUseCase->getResponse()]);
var_dump($eventVerificatorUseCase->getResponse());
