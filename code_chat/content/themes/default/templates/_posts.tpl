{if $_get == "newsfeed"}
	
	{if count($posts) > 0}
		<div>
			<ul class="js_posts_stream" data-get="newsfeed">
			    {foreach $posts as $post}
				{include file='__feeds_post.tpl'}
				{/foreach}
			</ul>

			<!-- see-more -->
			<div class="alert alert-post mb20 see-more js_see-more" data-get="newsfeed">
				<span>{__("Xem thêm bài đăng")}</span>
				<div class="loader loader_small x-hidden"></div>
			</div>
			<!-- see-more -->
		</div>
	{else}
		<ul class="js_posts_stream mb20" data-get="newsfeed">
			<div class="text-center x-muted">
				<i class="fa fa-newspaper-o fa-4x"></i>
				<p class="mb10"><strong>{__("Không có bài đăng nào")}</strong></p>
				<a href="{$system['system_url']}/friends/requests" class="btn btn-info">{__("Tìm bạn bè")}</a>
			</div>
		</ul>
	{/if}

{else}

	{if count($posts) > 0}
		<div>
			<ul class="js_posts_stream" data-get="{$_get}" data-id="{$_id}">
				{foreach $posts as $post}
				{include file='__feeds_post.tpl'}
				{/foreach}
			</ul>

			<!-- see-more -->
			<div class="alert alert-post see-more js_see-more" data-get="{$_get}" data-id="{$_id}">
				<span>{__("Xem thêm bài đăng")}</span>
				<div class="loader loader_small x-hidden"></div>
			</div>
			<!-- see-more -->
		</div>
	{else}
		<ul class="js_posts_stream" data-get="{$_get}" data-id="{$_id}">
			<div class="text-center x-muted">
				<i class="fa fa-newspaper-o fa-4x"></i>
				<p class="mb10"><strong>{__("Không có bài đăng nào")}</strong></p>
			</div>
		</ul>
	{/if}

{/if}