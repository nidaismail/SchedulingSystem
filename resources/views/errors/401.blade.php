@extends('errors::minimal')

@section('title', __('We are sorry you cannot access this page'))
@section('code', '401')
@section('message', __('Unauthorized'))
