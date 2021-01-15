#!/usr/bin/perl
use strict;
use warnings;
use CGI;
my $cgiObject = CGI->new;
print $cgiObject->header;
my $name = $cgiObject->param('name');
my $fav = $cgiObject->param('fav');
print "Hello $name ! Your favourite player is $fav ";
print '</br> <a href="https://www2.cs.ryerson.ca/~m15islam/singleValuedForm.html">Back</a>';
