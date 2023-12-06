@extends('errors::minimal')

@section('title', __('Forbidden'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Maaf anda tidak diizinkan mengakses halaman ini'))
