<?php
echo form_open('crud/cadastrar'); //
echo validation_errors('<p>','</p>');
if($this->session->flashdata('cadastrook'))://
echo '<p>'.$this->session->flashdata('cadastrook').'</p>';
endif;
echo form_label('Nome');
echo form_input(array('name'=>'nome'),set_value('nome',$nome),'autofocus');

echo form_label('Endereço');
echo form_input(array('name'=>'endereco'),set_value('endereco'));
echo form_label('Fone');
echo form_input(array('name'=>'fone'),set_value('fone'));

echo form_submit(array('name'=>'cadastrar'),'Cadastrar');
echo form_close();