<?php

/**
 * @return string
 */
function Position()
{
    $output = "";
    $output .= "<option value='Headmaster'>Headmaster</option>";
    $output .= "<option value='Assistant Teacher'>Assistant Teacher</option>";
    $output .= "<option value='Caretaker'>Caretaker</option>";
    $output .= "<option value='Jharudar'>Jharudar</option>";
    $output .= "<option value='Pion'>Pion</option>";
    return $output;
}

/**
 * @return string
 */
function EducationList()
{
    $output = "";
    $output .= "<option value='H.S.C'>J.S.C</option>";
    $output .= "<option value='S.S.C'>S.S.C</option>";
    $output .= "<option value='H.S.C'>H.S.C</option>";
    $output .= "<option value='Diploma'>Diploma</option>";
    $output .= "<option value='Diploma'>M.B.A</option>";
    $output .= "<option value='Diploma'>M.B.A</option>";
    return $output;
}
function ResultList()
{
    $output = "";
    $output .= "<option value='GPA5'>GPA5</option>";
    $output .= "<option value='A+'>A+</option>";
    $output .= "<option value='A-'>A-</option>";;
    $output .= "<option value='A Grate'>A Grate</option>";
    $output .= "<option value='B Grate'>B Grate</option>";
    $output .= "<option value='C Grate'>C Grate</option>";
    $output .= "<option value='D Grate'>D Grate</option>";
    $output .= "<option value='F'>F</option>";
    return $output;
}
