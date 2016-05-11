<?php
echo form_open('crud/teste'); //
echo validation_errors('<p>','</p>');
if($this->session->flashdata('cadastrook'))://
    echo '<p>'.$this->session->flashdata('cadastrook').'</p>';
endif;
echo form_label('Nome');
echo form_input(array('name'=>'nome','id'=>'id'),set_value('nome'),'autofocus');

echo form_label('Profissão');
echo form_input(array('name'=>'profissao'),set_value('profissao'));
echo form_label('Idade');
echo form_input(array('name'=>'fone'),set_value('fone'));

echo form_submit(array('name'=>'cadastrar'),'Cadastrar');
echo form_close();