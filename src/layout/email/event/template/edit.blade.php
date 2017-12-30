@extends('layout::app')

@section('htmlheader_title')
    Email Template Edit
@endsection

@section('main-content')
    <div class="content-body">
        <h2 class="page-header">@lang('common.email_template_edit')</h2>

        <div class="row">
            {{-- Left sidebar --}}
            <div class="col-lg-3">
                @include('layout::email.event.template.menu')
            </div>
            {{-- End Left sidebar --}}

            {{-- Team body --}}
            <?php
                $event_title = $item->event->title;

                if ($event_title == 'User registered') {
                	$event_title = 'Usuario registrado';
                }
                else if ($event_title == 'User password changed') {
                	$event_title = 'Cambio de contraseña';
                }
                else if ($event_title == 'User profile updated') {
                	$event_title = 'Perfil actualizado';
                }
                else if ($event_title == 'Complain registered') {
                	$event_title = 'Solicitud registrada';
                }
                else if ($event_title == 'Complain updates to complainer') {
                	$event_title = 'Actualizaciones de la solicitud';
                }
                else if ($event_title == 'System or operator complaint refer to department') {
                	$event_title = 'Asignación de solicitud a un departamento';
                }
                else if ($event_title == 'Supervisor complaint assigned to fieldworker') {
                	$event_title = 'Asignación a un Ejecutor';
                }
                else if ($event_title == 'Complaint updates to concerns employees') {
                	$event_title = 'Actualización de solicitudes para los empleados';
                }
                else if ($event_title == 'Employee registered') {
                	$event_title = 'Registro de Empleado';
                }
                else if ($event_title == 'Complaint failed to forward to department') {
                	$event_title = 'La solicitud no se envió al departamento';
                }
                else if ($event_title == 'Complaint status Validate') {
                	$event_title = 'Cambio de estatus de la solicitud';
                }
                else if ($event_title == 'Complaint status Pending') {
                	$event_title = 'Cambio de estatus de solicitud a Pendiente';
                }
                else if ($event_title == 'Complaint status Cancelled') {
                	$event_title = 'Cambio de estatus de solicitud a cancelada';
                }
                else if ($event_title == 'Complaint status Forwarded to Department') {
                	$event_title = 'Cambio de estatus de solicitud a enviado al departamento correspondiente';
                }
                else if ($event_title == 'Complaint status Assigned to fieldworker') {
                	$event_title = 'Cambio de estatus de la solicitud a Asignada';
                }
                else if ($event_title == 'Complaint status in-process') {
                	$event_title = 'Cambio de estatus de la solicitud a En proceso';
                }
                else if ($event_title == 'Complaint status reschedule') {
                	$event_title = 'Cambio de estatus de la solicitud a Turnada';
                }
                else if ($event_title == 'Complaint status attended') {
                	$event_title = 'Cambio de estatus de la solicitud a En espera';
                }
                else if ($event_title == 'Complaint status delayed') {
                	$event_title = 'Cambio de estatus de la solicitud a Atrasada';
                }
                else if ($event_title == 'Complaint status resolved') {
                	$event_title = 'Cambio de estatus de la solicitud a Resuelta';
                }
                else if ($event_title == 'User notice alert') {
                	$event_title = 'Tienes un nuevo mensaje del administrador';
                }
            ?>
            <div class="col-lg-9 bg-white">
                <h3><?= $event_title ?> - @lang('common.email_template')</h3>

                <div class="row">
                    <div class="col-md-12">
                        {{-- Error Print --}}
                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        {{-- End Error Print --}}
                    </div>
                </div>

                {{-- Content Body --}}
                <div class="row">
                    <div class="col-md-12">
                        {{ Form::model($item, ['route' => ['email.event.template.update', $item->event_alias ], 'method' => 'put']) }}

                        @include('layout::email.event.template.form')

                        <div class="form-group pull-right">
                            {{--{!! Form::hidden('editid', $item->id) !!}--}}
                            {!! Form::submit(trans('labels.buttons.update'), ['class' => 'btn btn-info']) !!}
                        </div>

                        {{ Form::close() }}
                    </div>
                </div>
                {{-- End Content Body --}}

            </div>

        </div>

    </div>
@endsection
