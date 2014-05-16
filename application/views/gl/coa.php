<div><h4>KODE PERKIRAAN AKUNTANSI</H4><div class="thumbnail">
	<?
	echo link_button('Save', 'save_this()','save');		
	echo link_button('Print', 'print()','print');		
	echo link_button('Add','','add','true',base_url().'index.php/coa/add');		
	echo link_button('Search','','search','true',base_url().'index.php/coa');		
	echo link_button('Help', 'load_help()','help');		
	
	?>
	<a href="#" class="easyui-splitbutton" data-options="menu:'#mmOptions',iconCls:'icon-tip'">Options</a>
	<div id="mmOptions" style="width:200px;">
		<div onclick="load_help()">Help</div>
		<div>Update</div>
		<div>MaxOn Forum</div>
		<div>About</div>
	</div>
	<script type="text/javascript">
		function load_help() {
			window.parent.$("#help").load("<?=base_url()?>index.php/help/load/coa");
		}
	</script>
	
</div>
<div class="thumbnail">	
<form id="myform"  method="post" action="<?=base_url()?>index.php/coa/save">
<input type='hidden' name='mode' id='mode'	value='<?=$mode?>'>
<?php echo validation_errors(); ?>
   <table>
	<tr>
		<td>Kode Perkiraan</td><td>
		<?php
		if($mode=='view'){
			echo "<strong>$account</strong>";
			echo form_hidden('account',$account);
		} else { 
			echo form_input('account',$account);
		}		
		?></td>
	</tr>	 
       <tr>
            <td>Nama Perkiraan</td><td><?php echo form_input('account_description',$account_description,"style='width:400px'");?></td>
       </tr>
       <tr>
            <td>Posisi</td><td><?php echo form_radio('db_or_cr','D',$db_or_cr=='0'||$db_or_cr=='');?>Debet
                <?php echo form_radio('db_or_cr','C',!($db_or_cr=='0'||$db_or_cr==''));?>Kredit
            </td>
       </tr>
       <tr>
            <td>Saldo Awal</td><td><?php echo form_input('beginning_balance',$beginning_balance);?></td>
       </tr>
       <tr>
            <td>Jenis Akun</td><td><?php echo form_dropdown( 'account_type',$account_type_list,$account_type);?></td>
       </tr>
       <tr>
            <td>Kelompok Akun</td><td><?php echo form_dropdown( 'group_type',$group_type_list,$group_type);?></td>
       </tr>
       <tr>
       </tr>

   </table>
   </form>
</div>   
<div class='thumbnail'>
	<div class='thumbnail'><h4>Transaksi</h4></div>
			<form method="post">
			<table>
			<tr><td>Date From</td>
			<td><?=form_input('date_from',date("Y-m-d"),'id=date_from class="easyui-datetimebox" ');?></td>
			<td>Date To</td>
			<td><?=form_input('date_to',date("Y-m-d"),'id=date_to  class="easyui-datetimebox" ');?></td>
			<td><?=link_button('Search','search_cards()','search');?></td>
			</tr>
			</table>
			</form>
		</div>
		<table id="dgCard" class="easyui-datagrid"  
			style="width:700px;min-height:700px"
			data-options="
				iconCls: 'icon-edit',
				singleSelect: true,  
				url: '',toolbar:'',
			">
			<thead>
				<tr>
					<th data-options="field:'gl_id',width:80">Nomor</th>
					<th data-options="field:'date',width:80">Tanggal</th>
					<th data-options="field:'source',width:180,align:'left',editor:'text'">Keterangan</th>
					<th data-options="field:'debit',width:80,align:'right',editor:{type:'numberbox',options:{precision:2}}">Debit</th>
					<th data-options="field:'credit',width:80,align:'right',editor:{type:'numberbox',options:{precision:2}}">Credit</th>
					<th data-options="field:'saldo',width:80,align:'right',editor:{type:'numberbox',options:{precision:2}}">Saldo</th>
					<th data-options="field:'operation',width:80,align:'right'">Operasi</th>
					<th data-options="field:'id',width:80,align:'right'">Id</th>
				</tr>
			</thead>
		</table>
</div>		
<script type="text/javascript">
    function save_this(){
        if($('#bank_account_number').val()===''){alert('Isi dulu kode bank !');return false;};
        if($('#bank_name').val()===''){alert('Isi dulu nama bank !');return false;};
        $('#myform').submit();
    }
	function search_cards()
	{
		var d1=$("#date_from").datebox('getValue');
		var d2=$("#date_to").datebox('getValue');
		var xurl='<?=base_url()?>index.php/coa/card/<?=$account?>?d1='+d1+'&d2='+d2;
		console.log(xurl);
		$('#dgCard').datagrid({url:xurl});
		$('#dgCard').datagrid('reload');
	}
	
</script>  

 
 