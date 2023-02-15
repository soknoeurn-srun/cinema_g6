<script src='views/js/search.js'></script>
<nav class=" text-white w-full">
	<div class="bg-red-600 px-5 py-4 xl:px-12 flex w-full items-center justify-between">
		<a class="text-3xl font-bold font-heading" href="/">
			DATE MOVIE.
		</a>
		<div class="hidden xl:flex items-center space-x-5">
		<?php if(isset($_SESSION['email']) && ($_SESSION['user_type'] == "admin" || $_SESSION['user_type'] == "user")){ ?>
			<a class="flex items-center hover:text-gray-200" href="#">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
					stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
						d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
				</svg>
				<span class="flex absolute -mt-5 ml-4">
					<span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-pink-400 opacity-75"></span>
					<span class="relative inline-flex rounded-full h-3 w-3 bg-orange-900">
					</span>
				</span>
			</a>
		<?php } ?>
			<!-- Sign In / Register      -->
			<a class="flex items-center <?= urlIs('/login') ? ' bg-gray-800' : ' bg-white' ?> rounded-xl p-2 hover:bg-black " href="<?php echo isset($_SESSION['email'])? '/logout' : '/login'?>">
				<h3 class="text-red-600 font-bold"><?php echo isset($_SESSION['email'])? 'LOGOUT' : 'LOGIN'?></h3>
				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24"
					stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
						d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
				</svg>
			</a>
			<?php if(empty($_SESSION['email']) || $_SESSION['user_type']== "admin" || $_SESSION['user_type']== "user"){ ?>
			<a class="flex items-center <?= urlIs('/register') ? ' bg-gray-800' : 'bg-white' ?> p-2 rounded-xl hover:bg-black" href="/register">
				<h3 class="text-red-600 font-bold"><?php if(empty($_SESSION['user_type'])){echo "REGISTER";}else {if($_SESSION['user_type'] == "admin"){echo "ADD USER";}else{echo "REGISTER";};} ?></h3>
				<svg xmlns="http://www.w3.org/2000/svg" class=" h-6 w-6 text-red-600" fill="none"
					viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
					d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
				</svg>
			</a>
				<?php } ?>
			
		</div>
	</div>
	<div class="bg-black">
		<div class="container mx-auto px-5 xl:px-12 py-6 flex justify-between items-center">
			<div class="flex space-x-10">
				<a href="<?php if(empty($_SESSION['email']) || $_SESSION['user_type'] == 'admin'){echo "/";}else{echo "/seller";} ?>" class="flex items-center space-x-2 <?= urlIs('/') || urlIs('/seller') ? 'border-white border-y-2' : '' ?>">
					<span>
					<?php if(empty($_SESSION['email']) || $_SESSION['user_type'] == 'admin' || $_SESSION['user_type'] == 'user'){ ?>
						<svg xmlns="http://www.w3.org/2000/svg"
							class="<?= urlIs('/') || urlIs('/seller') ? ' font-bold text-white' : 'text-red-500 font-bold' ?> h-6 w-6"
							fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
						</svg>

						<?php }else{ ?> 
						
						<svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
							class="<?= urlIs('/') || urlIs('/seller') ? ' font-bold text-white' : 'text-red-500 font-bold' ?> h-6 w-6">
  							<path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z"></path>
						</svg>
						<?php } ?>
					</span>
					<span class="<?= urlIs('/')|| urlIs('/seller') ? ' font-bold text-white' : 'text-red-500 font-bold' ?>"><?php if(empty($_SESSION['email']) || $_SESSION['user_type'] == 'admin' || $_SESSION['user_type'] == 'user'){echo "HOME";}else{echo "SELLER";} ?></span>
				</a>
				<?php if(empty($_SESSION['email']) || $_SESSION['user_type']== "admin" || $_SESSION['user_type']== "user"){ ?>
				<a class="<?= urlIs('/movie') ? 'border-white border-y-2' : '' ?> flex items-center space-x-2"
					href="/movie">
					<span>
						<svg xmlns="http://www.w3.org/2000/svg"
							class="<?= urlIs('/movie') ? ' font-bold text-white' : 'text-red-500 font-bold' ?>h-6 w-6"
							fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M15.91 11.672a.375.375 0 010 .656l-5.603 3.113a.375.375 0 01-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112z" />
						</svg>
					</span>
					<span
						class="<?= urlIs('/movie') ? ' font-bold text-white' : 'text-red-500 font-bold' ?>">MOVIES</span>
				</a>

				<a class="<?= urlIs('/ticket') ? 'border-white border-y-2' : '' ?> flex items-center space-x-2"
					href="/ticket">
					<span>
						<svg xmlns="http://www.w3.org/2000/svg"
							class="<?= urlIs('/ticket') ? 'font-bold text-white' : 'text-red-500 font-bold' ?> h-6 w-6"
							fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 010 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 010-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375z" />
						</svg>
					</span> 
					<span
						class="<?= urlIs('/ticket') || urlIs('/booking') ? ' font-bold text-white' : 'text-red-500 font-bold' ?>">BUY TICKET</span>
				</a>
				<?php } ?>
				<a class="<?= urlIs('/contact') || urlIs('/user') ? 'border-white border-y-2' : '' ?> flex items-center space-x-2"
					href="<?php if(empty($_SESSION['user_type'])){echo "/contact";}else {if($_SESSION['user_type'] == "admin"){echo "/user";}else{echo "/contact";};} ?>">
					<span>
						<svg xmlns="http://www.w3.org/2000/svg"
							class="<?= urlIs('/contact') || urlIs('/user') ? 'font-bold text-white' : 'text-red-500 font-bold' ?> h-6 w-6"
							fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
						</svg>
					</span>
					<span
						class="<?= urlIs('/contact') || urlIs('/user') ? ' font-bold text-white' : 'text-red-500 font-bold' ?>"><?php if(empty($_SESSION['user_type'])){echo "CONTACT";}else {if($_SESSION['user_type'] == "admin"){echo "SHOW USER";}else{echo "CONTACT";};} ?></span>
				</a>
			</div>
			<?php if (!(urlIs('/login') || urlIs('/register') || urlIs('/contact') || urlIs('/seller') || !empty($_SESSION['user_type']))){ ?>
			<div class="group_search flex">
			<div class="lg:flex items-center space-x-2 bg-white py-2 px-10 rounded-full">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-black font-bold cursor-pointer" fill="none"
						viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
				</svg>
				<input class="outline-none text-black placeholder:text-black" type="search" name="search" id="search" placeholder="Search Movie..." />
			</div>
		</div>
		<div class="list absolute z-50 top-[26.5%] left-[74.5%] " id="show_list">
	
		</div>
		<?php } ?>
	</div>
	</div>
</nav>
