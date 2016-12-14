@extends('layouts.app')

@section('title', 'List: ' . $list->name)

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                @yield('title')
                <div class="pull-right">
                    <div class="btn-group btn-group-xs">
                        <a href="{{ route('lists.index') }}" type="button" class="btn btn-default">Back to overview</a>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <th style="width:20%">Name</th>
                            <td>{{ $list->name }}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{!! $list->description !!}</td>
                        </tr>
                        <tr>
                            <th>Subscriptions</th>
                            <td><code>{{ $list->subscriptions()->count() }}</code></td>
                        </tr>
                        <tr>
                            <th>Created at</th>
                            <td><code>{{ $list->created_at }}</code></td>
                        </tr>
                        <tr>
                            <th>Updated at</th>
                            <td><code>{{ $list->updated_at }}</code></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('lists.edit', $list->id) }}" type="button" class="btn btn-default">Edit</a>
                                    <a href="" type="button" class="btn btn-default">Delete</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection