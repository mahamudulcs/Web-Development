#!/usr/local/bin/ruby -w
print "Content-type: text/html\n\n"
require 'cgi'
cgi = CGI.new
puts cgi['phone']
puts "<br/>"
puts cgi['firstname']
puts "<br/>"
puts cgi['lastname']
puts "<br/>"
puts cgi['lastname'].capitalize