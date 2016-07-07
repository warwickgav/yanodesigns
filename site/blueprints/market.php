<?php if(!defined('KIRBY')) exit ?>

title: Market
pages: false
files: false
sortable: true
fields:
	title:
		label: Market Name
		type:  text
	text:
		label: Location
		type:  text
	market_date:
		label: Date
		type: text
		width: 1/2
	time:
		label: Time
		type: text
		width: 1/2
	link:
		label: Link
		type: URL
	upcoming:
		label: Is this the soonest market?
		type: toggle
	done:
		label: Is this market finished?
		type: toggle

