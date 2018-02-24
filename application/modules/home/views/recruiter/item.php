<?php if(isset($recruiter) && count($recruiter) > 0):?>
    <?php foreach($recruiter as $item):?>
        <tr>
            <td>
                <a class="title-recruiter-post" href="<?php echo base_url('itemrecruiter/view').'/'.@$item->recruiter->pro_id.'/'.replace(@$item->recruiter->pro_name_rewrite)?>"><?=@$item->recruiter->pro_name?></a>
                <br>
                <b><?=@$item->recruiter->company_name?></b>
            </td>
            <td><?=@$item->position->name?></td>
            <td><?=@$item->location->name?></td>
            <td><?=@$item->wage->name?></td>
			<?php
				$day = @$item->recruiter->deadline;
				$deadline = date('d-m-Y', strtotime($day));
			?>
            <td><?=$deadline?></td>
        </tr>
    <?php endforeach;?>
<?php endif;?>