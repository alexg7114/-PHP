<?php
class CircleAreaLib
{
    public function getCircleArea(int $diagonal)
    {
        $area = (M_PI * $diagonal**2))/4;
        return $area;
    }
}
class SquareAreaLib
{
    public function getSquareArea(int $diagonal)
    {
        $area = ($diagonal**2)/2;
        return $area;
    }
}

interface ISquare
{
    function squareArea(int $sideSquare);
}
interface ICircle
{
    function circleArea(int $circumference);
}

class ISquareAdapter implements ISquare
{
    private $diagonal;
    public function getDiagonal(int $sideSquare)
    {
        return $diagonal;
    }
    public function _constract(SquareAreaLib $diagonal)
    {
        return $area;
    }
}

class ICircleAdapter implements ICircle
{
    private $diagonal;
    public function getDiagonal(int $circumference)
    {
        return $diagonal;
    }
    public function _constract(CircleAreaLib $diagonal)
    {
        return $area;
    }
}