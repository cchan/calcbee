<?php
define('ROOT_PATH','uh');

require_once "/lib/php/class.DB.php";

/*
What is the goal here?
-have POTDs.
-have online-submitted questions. [wait is it? or just a sign-up site?]



Enter a Question page
-title
-author
-text
-what competition to add it to
-else whether to publish as POTD

Start a Competition page
-Name
-Infopage contents
-Start/End


Problems table
	PID
	title
	author
	text
	LastPublished timedate, default 0, set for POTDs on publishing or when put in a competition (can search to see whether to put on Problems page)
	CID (zero for non-competition problems)
	
Competitions table
	CID
	Name
	Infopage content
	Start/End
	[logic: when submitting, gets Problems and puts them together into a question document
		and puts together a form for you to submit answers.]

Submissions table
	SID
	UID of user
	SolnText
	LastUpdated (submissions are not submitted multiple times and last timestamp taken; they are just overwritten.)
	AnswerAccepted flag, which is done by peer-review I suppose, or by moderators (compare with other accepted answers, one of which is official)

Teams table
	TID
	Name
	CID of the competition it is for
	[logic: when you sign up to compete, you have to form the team and invite people, who may or may not accept]
	[

TeamMemberships
	TID
	UID
	InviteAccepted flag

//IS THIS NECESSARY? Do we need Problems leaderboard? Hm.
Users table
	UID
	Biographical info (name, location, etc)
	Email
	Password
	[logic: tracks progress on Problems leaderboard]
*/

class Problem{
	public function __construct(){
		
	}
	public function __destruct(){
		
	}
	public function fetchRandom(){
		
	}
	public function fetchPID(){
		
	}
};

class Competition{
	$Problems; //=array(Problem)
	public function __construct(){
		
	}
	public function __destruct(){
		
	}
	public function fetchCID(){
		
	}
	public function export(){
		foreach problems as p
			$str.=$p->contents
	}
};

?>