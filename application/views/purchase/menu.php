<div style="margin:10px 0;"></div>
	<ul class="easyui-tree">
		<li>
			<span>Purchase Modules</span>
			<ul>
				<li>
					<span>Operation</span>
					<ul>
			<li><?=anchor('purchase_order','Purchase Order','class="info_link"');?></li>
			<li><?=anchor('purchase_invoice','Faktur Pembelian','class="info_link"');?></li>
			<li><?=anchor('payables_payments','Pembayaran','class="info_link"');?></li>
			<li><?=anchor('purchase_retur','Retur Pembelian','class="info_link"');?></li>
			<li><?=anchor('purchase_dbmemo','Debit Memo','class="info_link"');?></li>
			<li><?=anchor('purchase_crmemo','Credit Memo','class="info_link"');?></li>
					</ul>
				</li>
				<li   data-options="state:'closed'">
					<span>Report</span>
					<ul>
			<li><?=anchor('purchase/rpt/po_list','Purchase Order Summary','class="info_link"')?></li>
			<li><?=anchor('purchase/rpt/cards_sum','Kartu Hutang Summary','class="info_link"')?></li>
			<li><?=anchor('purchase/rpt/cards_detail','Kartu Hutang Detail','class="info_link"')?></li>
			<li><?=anchor('purchase/rpt/aging_sum','Umur Hutang Summary','class="info_link"')?></li>
			<li><?=anchor('purchase/rpt/agin_detail','Umur Hutang Detail','class="info_link"')?></li>
					</ul>
				</li>
				<li  data-options="state:'closed'">
					<span>Master</span>
					<ul>
			<li><?=anchor('supplier/add','Tambah Kode Supplier','class="info_link"')?></li>
			<li><?=anchor('supplier','Cari Master Supplier','class="info_link"')?></li>
					</ul>
				</li>
			</ul>
		</li>
	</ul>
