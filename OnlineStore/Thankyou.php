<!DOCTYPE html>
<html>
<head>
	<title>Thank You</title>
	<style>
		body {
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
            margin: 0;
		}
		
        .header {
			background-color: #333;
			color: lightgray;
			font-size: 24px;
			font-weight: bold;
			text-align: center;
			padding: 10px;
		}

		#message {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			font-size: 48px;
			font-weight: bold;
			text-align: center;
			opacity: 0;
			animation: fadeIn 2s ease-in-out forwards;
		}
		
		#footer {
			position: fixed;
			bottom: 0;
			left: 0;
			width: 100%;
			background-color: #333;
			color: #fff;
			text-align: center;
			padding: 10px;
			font-size: 16px;
			overflow: hidden;
			animation: none;
		}
		
		#footer span {
			display: inline-block;
			white-space: nowrap;
			animation: typeIn 5s steps(66, end) forwards;
			animation-delay: 1s;
			opacity: 0;
			overflow: hidden;
			border-right: .15em solid white;
			max-width: 380px;
		}

		#close-btn {
			position: fixed;
			bottom: 50px;
			right: 20px;
			font-size: 60px;
			color: orange;
			cursor: pointer;
			z-index: 9999;
		}

		#close-btn:hover {
			color: red;
		}

		@keyframes fadeIn {
			from { opacity: 0; }
			to { opacity: 1; }
		}

		#message {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			font-size: 48px;
			font-weight: bold;
			text-align: center;
			opacity: 1;
			animation: fadeIn 2s ease-in-out forwards;
		}
		
		@keyframes typeIn {
			from { width: 0; opacity: 1; }
			to { width: 100%; opacity: 1; border-right: none; }
		}
	</style>
</head>
<body>
	<div class="header">
		moonSun
	</div>
	<div id="message">
		Thank You<br>
		<span style="font-size: 24px; font-weight: normal;">for believing in us</span>
	</div>
	
	<div id="footer">
		<span>Your order is received, we will process it immediately!</span>
	</div>

	<div id="close-btn" onclick="window.location.href='index.php';">&times;</div>
</body>
</html>
