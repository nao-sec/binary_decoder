# RigEK's Binary Decoder
This script decodes the malware's encryption when dropped from RigEK (application/x-msdownload).

The decode routine is affected by the version of RigEK.  
It corresponds only to RigEK which is used at the stage of April 20, 2017.

P.S.
This is RC4 ;)

## Usage
```sh
# current key is "gexywoaxor"
$ php decoder.php [key] [input] [output]
```

For example
```sh
$ php src/decoder.php "gexywoaxor" test/input.bin test/output.bin
$ md5sum test/output.bin test/answer.bin
```

## LICENSE
```Binary_Decoder``` is open-sourced software licensed under the [MIT License](LICENSE)
