    <div class="category-products">
        <ul class="products-grid row">
            {foreach $doc_hoa as $hoa}
            <li class="item">
                <div class="category-products-grid">
                    <div class="images-container">
                        <div class="product-hover">
                            <a href="san-pham/{$hoa->TenHoa_URL}-{$hoa->MaHoa}.html" title="{$hoa->TenHoa}" class="product-image">
                                <img class="img-responsive hinh_hoa" src="public/images/hoa/{$hoa->Hinh}"  alt="{$hoa->TenHoa}">
                            </a>
                        </div>
                        <h2 class="product-name">
                        <a href="san-pham/{$hoa->TenHoa_URL}-{$hoa->MaHoa}.html" title="{$hoa->TenHoa}">{$hoa->TenHoa}</a>
                        </h2>
                        <div class="actions-no hover-box">
                            <div class="actions">
                                <div class="price-box">
                                    <a class="minimal-price-link">
                                        <span class="mua_online">Mua online:</span>
                                        <span class="price" id="product-minimal-price-2678">{number_format({$hoa->Gia})} ₫</span>
                                    </a>
                                </div>
                            </div>
                            <div class="actions-cart">
                              {if isset($smarty.session.tong_gio_hang)}
                                <a  onclick="chuyen_huong_gio_hang({$hoa->MaHoa},{$smarty.session.tong_gio_hang},{$hoa->SoLuongSP})" href="javascript:void(0)"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i></a>
                              {else}
                                  <a  onclick="chuyen_huong_gio_hang({$hoa->MaHoa},0,{$hoa->SoLuongSP})" href="javascript:void(0)"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i></a>
                              {/if}
                        </div>
                    </div>
                </div>
            </li>
            {/foreach}
        </ul>
    </div>
    <div class="bsm_products_pagination" >
      {for $i=1;$i<=$phan_trang;$i++}
      <span class="pagination_link" id="{$i}">  {$i}</span>
      {/for}
</div>
</div>
