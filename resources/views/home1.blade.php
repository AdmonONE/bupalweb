@extends('layouts.app')

{{ Session::get('message') }}

@section('content')

            

            <div class="container">
        
            <ul class="cb-slideshow">
            <li><span>Image 01</span><div><h3></h3></div></li>
            <li><span>Image 02</span><div><h3></h3></div></li>
            <li><span>Image 03</span><div><h3></h3></div></li>
            <li><span>Image 04</span><div><h3></h3></div></li>
            <li><span>Image 05</span><div><h3></h3></div></li>
            <li><span>Image 06</span><div><h3></h3></div></li>
            </ul>
            
            <header>


            
               
                <div class="support-note"><!-- let's check browser support with modernizr -->
                    <!--span class="no-cssanimations">CSS animations are not supported in your browser</span-->
                    <span class="no-csstransforms">CSS transforms are not supported in your browser</span>
                    <!--span class="no-csstransforms3d">CSS 3D transforms are not supported in your browser</span-->
                    <span class="no-csstransitions">CSS transitions are not supported in your browser</span>
                    <span class="note-ie">Sorry, only modern browsers.</span>
                </div>
                
            </header>
            
            <section class="main">
            
                <ul class="ch-grid">

                 @if(Auth::user()->area == 'Dirección')
                    <li>
                        <div class="ch-item ch-img-1">
                            <div class="ch-info">
                                <a href="home"><h3>Registrar Oficio P.DBU</h3></a>
                                <p>Direccion de Bienestar Universitario</p>
                            </div>
                        </div>
                    </li>
                    
                 

                    <li>
                        <div class="ch-item ch-img-2">
                            <div class="ch-info">
                                <a href="cultura"><h3>Registrar Oficio P.SCUL</h3></a>
                                <p>Área de Cultura</p>
                            </div>
                        </div>
                    </li>


                    <li>
                        <div class="ch-item ch-img-3">
                            <div class="ch-info">
                                <a href="deporte"><h3>Registrar Oficio P.SAFD</h3></a>
                                <p>Área de A.Fis.Dep.</p>
                            </div>
                        </div>
                    </li>

                    


                    <li>
                        <div class="ch-item ch-img-4">
                            <div class="ch-info">
                                <a href="salud"><h3>Registrar Oficio P.SUS</h3></a>
                                <p>Área de Salud Est.</p>
                            </div>
                        </div>
                    </li>



                    <li>
                        <div class="ch-item ch-img-5">
                            <div class="ch-info">
                                <a href="aintegral"><h3>Registrar Oficio P.SAI</h3></a>
                                <p>Área de Acomp.Integ.</p>
                            </div>
                        </div>
                    </li>




                    <li>
                        <div class="ch-item ch-img-6">
                            <div class="ch-info">
                                <a href="gestion"><h3>Registrar Oficio P.SGFS</h3></a>
                                <p>Área de Gesti.Fom.Soc.</p>
                            </div>
                        </div>
                    </li>



                    @endif

                 @if(Auth::user()->area == 'Acompañamiento Integral')
                    <li>
                        <div class="ch-item ch-img-1">
                            <div class="ch-info">
                                <a href="home"><h3>Registrar Oficio P.DBU</h3></a>
                                <p>Direccion de Bienestar Universitario</p>
                            </div>
                        </div>
                    </li>
                    

                    <li>
                        <div class="ch-item ch-img-5">
                            <div class="ch-info">
                                <a href="aintegral"><h3>Registrar Oficio P.SAI</h3></a>
                                <p>Área de Acomp.Integ.</p>
                            </div>
                        </div>
                    </li>



                    @endif





                    @if(Auth::user()->area == 'Cultura')
                    <li>
                        <div class="ch-item ch-img-1">
                            <div class="ch-info">
                                <a href="home"><h3>Registrar Oficio P.DBU</h3></a>
                                <p>Direccion de Bienestar Universitario</p>
                            </div>
                        </div>
                    </li>
                    
                 

                    <li>
                        <div class="ch-item ch-img-2">
                            <div class="ch-info">
                                <a href="cultura"><h3>Registrar Oficio P.SCUL</h3></a>
                                <p>Área de Cultura</p>
                            </div>
                        </div>
                    </li>


                   @endif



                    @if(Auth::user()->area == 'Actividad Física y Deportes')
                    <li>
                        <div class="ch-item ch-img-1">
                            <div class="ch-info">
                                <a href="home"><h3>Registrar Oficio P.DBU</h3></a>
                                <p>Direccion de Bienestar Universitario</p>
                            </div>
                        </div>
                    </li>
                    
                 
                    <li>
                        <div class="ch-item ch-img-3">
                            <div class="ch-info">
                                <a href="deporte"><h3>Registrar Oficio P.SAFD</h3></a>
                                <p>Área de A.Fis.Dep.</p>
                            </div>
                        </div>
                    </li>

                    

                    @endif




                    @if(Auth::user()->area == 'P.SGFSión y Fomento Socioeconómico')
                    <li>
                        <div class="ch-item ch-img-1">
                            <div class="ch-info">
                                <a href="home"><h3>Registrar Oficio P.P.DBU</h3></a>
                                <p>Direccion de Bienestar Universitario</p>
                            </div>
                        </div>
                    </li>
                    
                 

                    <li>
                        <div class="ch-item ch-img-6">
                            <div class="ch-info">
                                <a href="P.SGFSion"><h3>Registrar Oficio P.SGFS</h3></a>
                                <p>Área de P.SGFS.Fom.Soc.</p>
                            </div>
                        </div>
                    </li>


                    @endif



                    @if(Auth::user()->area == 'Salud Estudiantil')
                    <li>
                        <div class="ch-item ch-img-1">
                            <div class="ch-info">
                                <a href="home"><h3>Registrar Oficio P.DBU</h3></a>
                                <p>Direccion de Bienestar Universitario</p>
                            </div>
                        </div>
                    </li>
                    
                 
                    <li>
                        <div class="ch-item ch-img-4">
                            <div class="ch-info">
                                <a href="salud"><h3>Registrar Oficio Salud</h3></a>
                                <p>Área de Salud Est.</p>
                            </div>
                        </div>
                    </li>


                    @endif



                </ul>
                
            </section>
            
        </div>



@stop
