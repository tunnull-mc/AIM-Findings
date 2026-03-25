# Stock Ticker Information

# Stock Lookup
URL: http://aim-symbol-lookup.pf.aol.com/companylookup.xml
## Mimicry
Currently unable to replicate functions due to lack of archives of http://aim-symbol-lookup.pf.aol.com/companylookup.xml
## API Syntax (GET)
- search_term: Stock symbol to search for
- max: Result pagination limiter
- search_criteria: Unknown

# Stock Data
Url: http://aim-charts.pf.aol.com/
## Mimicry
Able to be replicated using INI-ish format. Able to run PHP code.
## API Syntax (GET)
- action: Unknown, probably a client signature.
- fields: Possibly stock index symbols
- syms: List of symbols to get data for, uppercase, comma separated.
