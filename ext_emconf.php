<?php

########################################################################
# Extension Manager/Repository config file for ext: "doctrine"
#
# Auto generated 09-05-2008 04:24
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Doctrine',
	'description' => 'Doctrine integration for TYPO3',
	'category' => 'misc',
	'author' => 'Christopher Hlubek, Bastian Waidelich',
	'author_email' => 'hlubek (at) networkteam.com, bastian@typo3.org',
	'shy' => '',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => '',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '0.0.3',
	'constraints' => array(
		'depends' => array(
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:357:{s:9:"ChangeLog";s:4:"6691";s:10:"README.txt";s:4:"ee2d";s:12:"ext_icon.gif";s:4:"1bdc";s:17:"ext_localconf.php";s:4:"5e54";s:14:"ext_tables.php";s:4:"367a";s:16:"locallang_db.xml";s:4:"d12f";s:43:"classes/class.TYPO3_DB_Doctrine_Adapter.php";s:4:"9ef4";s:25:"lib/doctrine/Doctrine.php";s:4:"859d";s:32:"lib/doctrine/Doctrine/Access.php";s:4:"f4de";s:33:"lib/doctrine/Doctrine/Adapter.php";s:4:"d9b5";s:34:"lib/doctrine/Doctrine/AuditLog.php";s:4:"df55";s:31:"lib/doctrine/Doctrine/Cache.php";s:4:"8b5e";s:29:"lib/doctrine/Doctrine/Cli.php";s:4:"a50a";s:36:"lib/doctrine/Doctrine/Collection.php";s:4:"d0e6";s:32:"lib/doctrine/Doctrine/Column.php";s:4:"2f57";s:34:"lib/doctrine/Doctrine/Compiler.php";s:4:"58a0";s:38:"lib/doctrine/Doctrine/Configurable.php";s:4:"1605";s:36:"lib/doctrine/Doctrine/Connection.php";s:4:"1226";s:30:"lib/doctrine/Doctrine/Data.php";s:4:"60be";s:34:"lib/doctrine/Doctrine/DataDict.php";s:4:"1f65";s:34:"lib/doctrine/Doctrine/DataType.php";s:4:"5321";s:31:"lib/doctrine/Doctrine/Event.php";s:4:"f13b";s:39:"lib/doctrine/Doctrine/EventListener.php";s:4:"40a9";s:35:"lib/doctrine/Doctrine/Exception.php";s:4:"acc6";s:32:"lib/doctrine/Doctrine/Export.php";s:4:"b731";s:36:"lib/doctrine/Doctrine/Expression.php";s:4:"4280";s:30:"lib/doctrine/Doctrine/File.php";s:4:"4513";s:35:"lib/doctrine/Doctrine/Formatter.php";s:4:"9287";s:30:"lib/doctrine/Doctrine/Hook.php";s:4:"29f9";s:34:"lib/doctrine/Doctrine/Hydrator.php";s:4:"2e66";s:30:"lib/doctrine/Doctrine/I18n.php";s:4:"ff5b";s:32:"lib/doctrine/Doctrine/Import.php";s:4:"2ae7";s:35:"lib/doctrine/Doctrine/Inflector.php";s:4:"3319";s:41:"lib/doctrine/Doctrine/IntegrityMapper.php";s:4:"d3ca";s:29:"lib/doctrine/Doctrine/Lib.php";s:4:"1104";s:33:"lib/doctrine/Doctrine/Locator.php";s:4:"aa05";s:29:"lib/doctrine/Doctrine/Log.php";s:4:"e3d3";s:33:"lib/doctrine/Doctrine/Manager.php";s:4:"e9c5";s:35:"lib/doctrine/Doctrine/Migration.php";s:4:"6ba2";s:30:"lib/doctrine/Doctrine/Node.php";s:4:"dc45";s:30:"lib/doctrine/Doctrine/Null.php";s:4:"ad40";s:38:"lib/doctrine/Doctrine/Overloadable.php";s:4:"8a98";s:31:"lib/doctrine/Doctrine/Pager.php";s:4:"ac86";s:32:"lib/doctrine/Doctrine/Parser.php";s:4:"df89";s:31:"lib/doctrine/Doctrine/Query.php";s:4:"699e";s:32:"lib/doctrine/Doctrine/RawSql.php";s:4:"b3cc";s:32:"lib/doctrine/Doctrine/Record.php";s:4:"d3a5";s:34:"lib/doctrine/Doctrine/Relation.php";s:4:"ab97";s:32:"lib/doctrine/Doctrine/Search.php";s:4:"e644";s:34:"lib/doctrine/Doctrine/Sequence.php";s:4:"b3d9";s:31:"lib/doctrine/Doctrine/Table.php";s:4:"4bac";s:30:"lib/doctrine/Doctrine/Task.php";s:4:"4e20";s:34:"lib/doctrine/Doctrine/Template.php";s:4:"d1f6";s:37:"lib/doctrine/Doctrine/Transaction.php";s:4:"3d76";s:30:"lib/doctrine/Doctrine/Tree.php";s:4:"38c1";s:30:"lib/doctrine/Doctrine/Util.php";s:4:"ea1e";s:35:"lib/doctrine/Doctrine/Validator.php";s:4:"798b";s:30:"lib/doctrine/Doctrine/View.php";s:4:"3a5f";s:40:"lib/doctrine/Doctrine/Import/Builder.php";s:4:"01b6";s:42:"lib/doctrine/Doctrine/Import/Exception.php";s:4:"2b23";s:41:"lib/doctrine/Doctrine/Import/Firebird.php";s:4:"08c9";s:41:"lib/doctrine/Doctrine/Import/Informix.php";s:4:"22c7";s:38:"lib/doctrine/Doctrine/Import/Mssql.php";s:4:"748a";s:38:"lib/doctrine/Doctrine/Import/Mysql.php";s:4:"587d";s:39:"lib/doctrine/Doctrine/Import/Oracle.php";s:4:"2788";s:38:"lib/doctrine/Doctrine/Import/Pgsql.php";s:4:"b6b0";s:39:"lib/doctrine/Doctrine/Import/Schema.php";s:4:"3637";s:39:"lib/doctrine/Doctrine/Import/Sqlite.php";s:4:"bf88";s:50:"lib/doctrine/Doctrine/Import/Builder/BaseClass.php";s:4:"10a4";s:50:"lib/doctrine/Doctrine/Import/Builder/Exception.php";s:4:"3929";s:43:"lib/doctrine/Doctrine/Manager/Exception.php";s:4:"46bd";s:43:"lib/doctrine/Doctrine/Locking/Exception.php";s:4:"66b2";s:53:"lib/doctrine/Doctrine/Locking/Manager/Pessimistic.php";s:4:"98b8";s:39:"lib/doctrine/Doctrine/Log/Exception.php";s:4:"294e";s:46:"lib/doctrine/Doctrine/Log/Filter/Interface.php";s:4:"03f5";s:44:"lib/doctrine/Doctrine/Log/Filter/Message.php";s:4:"3387";s:45:"lib/doctrine/Doctrine/Log/Filter/Priority.php";s:4:"019a";s:45:"lib/doctrine/Doctrine/Log/Filter/Suppress.php";s:4:"ebdb";s:49:"lib/doctrine/Doctrine/Log/Formatter/Interface.php";s:4:"df39";s:46:"lib/doctrine/Doctrine/Log/Formatter/Simple.php";s:4:"e671";s:43:"lib/doctrine/Doctrine/Log/Formatter/Xml.php";s:4:"8412";s:45:"lib/doctrine/Doctrine/Log/Writer/Abstract.php";s:4:"d1b4";s:39:"lib/doctrine/Doctrine/Log/Writer/Db.php";s:4:"e4e7";s:41:"lib/doctrine/Doctrine/Log/Writer/Mock.php";s:4:"68b5";s:41:"lib/doctrine/Doctrine/Log/Writer/Null.php";s:4:"82ee";s:43:"lib/doctrine/Doctrine/Log/Writer/Stream.php";s:4:"6f56";s:42:"lib/doctrine/Doctrine/Parser/Exception.php";s:4:"9449";s:37:"lib/doctrine/Doctrine/Parser/Json.php";s:4:"2727";s:42:"lib/doctrine/Doctrine/Parser/Serialize.php";s:4:"b2c7";s:37:"lib/doctrine/Doctrine/Parser/Spyc.php";s:4:"d92b";s:36:"lib/doctrine/Doctrine/Parser/Xml.php";s:4:"6f2a";s:36:"lib/doctrine/Doctrine/Parser/Yml.php";s:4:"9691";s:46:"lib/doctrine/Doctrine/Parser/Spyc/YamlNode.php";s:4:"8f05";s:44:"lib/doctrine/Doctrine/Tree/AdjacencyList.php";s:4:"775b";s:40:"lib/doctrine/Doctrine/Tree/Exception.php";s:4:"f9b8";s:40:"lib/doctrine/Doctrine/Tree/Interface.php";s:4:"0d2c";s:47:"lib/doctrine/Doctrine/Tree/MaterializedPath.php";s:4:"8b24";s:40:"lib/doctrine/Doctrine/Tree/NestedSet.php";s:4:"a1ad";s:47:"lib/doctrine/Doctrine/Transaction/Exception.php";s:4:"b944";s:46:"lib/doctrine/Doctrine/Transaction/Firebird.php";s:4:"cec5";s:46:"lib/doctrine/Doctrine/Transaction/Informix.php";s:4:"a9f2";s:42:"lib/doctrine/Doctrine/Transaction/Mock.php";s:4:"9d69";s:43:"lib/doctrine/Doctrine/Transaction/Mssql.php";s:4:"6359";s:43:"lib/doctrine/Doctrine/Transaction/Mysql.php";s:4:"0420";s:44:"lib/doctrine/Doctrine/Transaction/Oracle.php";s:4:"1dd1";s:43:"lib/doctrine/Doctrine/Transaction/Pgsql.php";s:4:"57cf";s:44:"lib/doctrine/Doctrine/Transaction/Sqlite.php";s:4:"915d";s:40:"lib/doctrine/Doctrine/Query/Abstract.php";s:4:"d9f1";s:37:"lib/doctrine/Doctrine/Query/Check.php";s:4:"c36e";s:41:"lib/doctrine/Doctrine/Query/Condition.php";s:4:"e8e5";s:41:"lib/doctrine/Doctrine/Query/Exception.php";s:4:"756a";s:38:"lib/doctrine/Doctrine/Query/Filter.php";s:4:"3c77";s:36:"lib/doctrine/Doctrine/Query/From.php";s:4:"2a8e";s:39:"lib/doctrine/Doctrine/Query/Groupby.php";s:4:"89f1";s:38:"lib/doctrine/Doctrine/Query/Having.php";s:4:"3838";s:45:"lib/doctrine/Doctrine/Query/JoinCondition.php";s:4:"46af";s:37:"lib/doctrine/Doctrine/Query/Limit.php";s:4:"3ba0";s:38:"lib/doctrine/Doctrine/Query/Offset.php";s:4:"9a69";s:39:"lib/doctrine/Doctrine/Query/Orderby.php";s:4:"e5e3";s:38:"lib/doctrine/Doctrine/Query/Parser.php";s:4:"98c1";s:36:"lib/doctrine/Doctrine/Query/Part.php";s:4:"6d58";s:40:"lib/doctrine/Doctrine/Query/Registry.php";s:4:"566f";s:38:"lib/doctrine/Doctrine/Query/Select.php";s:4:"565a";s:35:"lib/doctrine/Doctrine/Query/Set.php";s:4:"64f6";s:41:"lib/doctrine/Doctrine/Query/Tokenizer.php";s:4:"8a68";s:37:"lib/doctrine/Doctrine/Query/Where.php";s:4:"5f3d";s:50:"lib/doctrine/Doctrine/Query/Registry/Exception.php";s:4:"757c";s:51:"lib/doctrine/Doctrine/Query/Tokenizer/Exception.php";s:4:"8db5";s:44:"lib/doctrine/Doctrine/Query/Filter/Chain.php";s:4:"2950";s:48:"lib/doctrine/Doctrine/Query/Filter/Interface.php";s:4:"a5a0";s:43:"lib/doctrine/Doctrine/Expression/Driver.php";s:4:"3b62";s:46:"lib/doctrine/Doctrine/Expression/Exception.php";s:4:"157d";s:45:"lib/doctrine/Doctrine/Expression/Firebird.php";s:4:"aa0b";s:45:"lib/doctrine/Doctrine/Expression/Informix.php";s:4:"9532";s:41:"lib/doctrine/Doctrine/Expression/Mock.php";s:4:"1aa1";s:42:"lib/doctrine/Doctrine/Expression/Mssql.php";s:4:"6d74";s:42:"lib/doctrine/Doctrine/Expression/Mysql.php";s:4:"54e7";s:43:"lib/doctrine/Doctrine/Expression/Oracle.php";s:4:"48f3";s:42:"lib/doctrine/Doctrine/Expression/Pgsql.php";s:4:"5787";s:43:"lib/doctrine/Doctrine/Expression/Sqlite.php";s:4:"8d56";s:46:"lib/doctrine/Doctrine/Collection/Exception.php";s:4:"acb2";s:45:"lib/doctrine/Doctrine/Collection/Iterator.php";s:4:"c5d4";s:43:"lib/doctrine/Doctrine/Collection/Offset.php";s:4:"71a5";s:56:"lib/doctrine/Doctrine/Collection/Iterator/Expandable.php";s:4:"7569";s:52:"lib/doctrine/Doctrine/Collection/Iterator/Normal.php";s:4:"5892";s:52:"lib/doctrine/Doctrine/Collection/Iterator/Offset.php";s:4:"e407";s:48:"lib/doctrine/Doctrine/Cli/AnsiColorFormatter.php";s:4:"00c0";s:39:"lib/doctrine/Doctrine/Cli/Exception.php";s:4:"8131";s:39:"lib/doctrine/Doctrine/Cli/Formatter.php";s:4:"6407";s:40:"lib/doctrine/Doctrine/I18n/Exception.php";s:4:"810c";s:43:"lib/doctrine/Doctrine/Locator/Exception.php";s:4:"119a";s:44:"lib/doctrine/Doctrine/Locator/Injectable.php";s:4:"741d";s:44:"lib/doctrine/Doctrine/Compiler/Exception.php";s:4:"6e7f";s:40:"lib/doctrine/Doctrine/View/Exception.php";s:4:"e1fe";s:44:"lib/doctrine/Doctrine/Node/AdjacencyList.php";s:4:"143f";s:40:"lib/doctrine/Doctrine/Node/Exception.php";s:4:"ba1e";s:40:"lib/doctrine/Doctrine/Node/Interface.php";s:4:"8655";s:47:"lib/doctrine/Doctrine/Node/MaterializedPath.php";s:4:"5cf7";s:40:"lib/doctrine/Doctrine/Node/NestedSet.php";s:4:"2541";s:66:"lib/doctrine/Doctrine/Node/MaterializedPath/LevelOrderIterator.php";s:4:"567f";s:65:"lib/doctrine/Doctrine/Node/MaterializedPath/PostOrderIterator.php";s:4:"0151";s:64:"lib/doctrine/Doctrine/Node/MaterializedPath/PreOrderIterator.php";s:4:"fbff";s:59:"lib/doctrine/Doctrine/Node/NestedSet/LevelOrderIterator.php";s:4:"e0be";s:58:"lib/doctrine/Doctrine/Node/NestedSet/PostOrderIterator.php";s:4:"b85d";s:57:"lib/doctrine/Doctrine/Node/NestedSet/PreOrderIterator.php";s:4:"7277";s:63:"lib/doctrine/Doctrine/Node/AdjacencyList/LevelOrderIterator.php";s:4:"1e00";s:62:"lib/doctrine/Doctrine/Node/AdjacencyList/PostOrderIterator.php";s:4:"0269";s:61:"lib/doctrine/Doctrine/Node/AdjacencyList/PreOrderIterator.php";s:4:"16fc";s:46:"lib/doctrine/Doctrine/Relation/Association.php";s:4:"073b";s:44:"lib/doctrine/Doctrine/Relation/Exception.php";s:4:"8b21";s:45:"lib/doctrine/Doctrine/Relation/ForeignKey.php";s:4:"e702";s:43:"lib/doctrine/Doctrine/Relation/LocalKey.php";s:4:"91f7";s:39:"lib/doctrine/Doctrine/Relation/Nest.php";s:4:"3268";s:41:"lib/doctrine/Doctrine/Relation/Parser.php";s:4:"409f";s:51:"lib/doctrine/Doctrine/Relation/Parser/Exception.php";s:4:"19a1";s:51:"lib/doctrine/Doctrine/Relation/Association/Self.php";s:4:"fdcc";s:45:"lib/doctrine/Doctrine/EventListener/Chain.php";s:4:"b250";s:49:"lib/doctrine/Doctrine/EventListener/Exception.php";s:4:"23db";s:49:"lib/doctrine/Doctrine/EventListener/Interface.php";s:4:"d9b3";s:35:"lib/doctrine/Doctrine/Cache/Apc.php";s:4:"673a";s:37:"lib/doctrine/Doctrine/Cache/Array.php";s:4:"f8d6";s:34:"lib/doctrine/Doctrine/Cache/Db.php";s:4:"18db";s:38:"lib/doctrine/Doctrine/Cache/Driver.php";s:4:"9ff6";s:41:"lib/doctrine/Doctrine/Cache/Exception.php";s:4:"bf7f";s:41:"lib/doctrine/Doctrine/Cache/Interface.php";s:4:"ef76";s:40:"lib/doctrine/Doctrine/Cache/Memcache.php";s:4:"b16d";s:38:"lib/doctrine/Doctrine/Cache/Xcache.php";s:4:"018f";s:40:"lib/doctrine/Doctrine/Data/Exception.php";s:4:"055a";s:37:"lib/doctrine/Doctrine/Data/Export.php";s:4:"479f";s:37:"lib/doctrine/Doctrine/Data/Import.php";s:4:"5025";s:47:"lib/doctrine/Doctrine/Template/Geographical.php";s:4:"737b";s:39:"lib/doctrine/Doctrine/Template/I18n.php";s:4:"052b";s:44:"lib/doctrine/Doctrine/Template/NestedSet.php";s:4:"1384";s:45:"lib/doctrine/Doctrine/Template/Searchable.php";s:4:"bf6a";s:44:"lib/doctrine/Doctrine/Template/Sluggable.php";s:4:"4022";s:48:"lib/doctrine/Doctrine/Template/Timestampable.php";s:4:"9c36";s:46:"lib/doctrine/Doctrine/Template/Versionable.php";s:4:"ef77";s:53:"lib/doctrine/Doctrine/Template/Listener/Sluggable.php";s:4:"3f97";s:57:"lib/doctrine/Doctrine/Template/Listener/Timestampable.php";s:4:"98f4";s:43:"lib/doctrine/Doctrine/Connection/Common.php";s:4:"f52b";s:40:"lib/doctrine/Doctrine/Connection/Db2.php";s:4:"4436";s:46:"lib/doctrine/Doctrine/Connection/Exception.php";s:4:"c2a7";s:45:"lib/doctrine/Doctrine/Connection/Firebird.php";s:4:"a23a";s:45:"lib/doctrine/Doctrine/Connection/Informix.php";s:4:"4d37";s:41:"lib/doctrine/Doctrine/Connection/Mock.php";s:4:"243e";s:43:"lib/doctrine/Doctrine/Connection/Module.php";s:4:"da9b";s:42:"lib/doctrine/Doctrine/Connection/Mssql.php";s:4:"a8aa";s:42:"lib/doctrine/Doctrine/Connection/Mysql.php";s:4:"59ec";s:43:"lib/doctrine/Doctrine/Connection/Oracle.php";s:4:"45a5";s:42:"lib/doctrine/Doctrine/Connection/Pgsql.php";s:4:"1f8e";s:45:"lib/doctrine/Doctrine/Connection/Profiler.php";s:4:"ea9d";s:43:"lib/doctrine/Doctrine/Connection/Sqlite.php";s:4:"50c2";s:46:"lib/doctrine/Doctrine/Connection/Statement.php";s:4:"90bf";s:47:"lib/doctrine/Doctrine/Connection/UnitOfWork.php";s:4:"6d7a";s:53:"lib/doctrine/Doctrine/Connection/Oracle/Exception.php";s:4:"71bc";s:52:"lib/doctrine/Doctrine/Connection/Mssql/Exception.php";s:4:"9394";s:52:"lib/doctrine/Doctrine/Connection/Pgsql/Exception.php";s:4:"80c0";s:55:"lib/doctrine/Doctrine/Connection/Informix/Exception.php";s:4:"d6ab";s:52:"lib/doctrine/Doctrine/Connection/Mysql/Exception.php";s:4:"26b8";s:55:"lib/doctrine/Doctrine/Connection/Firebird/Exception.php";s:4:"351d";s:55:"lib/doctrine/Doctrine/Connection/Profiler/Exception.php";s:4:"de6e";s:53:"lib/doctrine/Doctrine/Connection/Sqlite/Exception.php";s:4:"55f1";s:41:"lib/doctrine/Doctrine/Record/Abstract.php";s:4:"9039";s:42:"lib/doctrine/Doctrine/Record/Exception.php";s:4:"d21b";s:39:"lib/doctrine/Doctrine/Record/Filter.php";s:4:"f3f4";s:42:"lib/doctrine/Doctrine/Record/Generator.php";s:4:"ca6a";s:41:"lib/doctrine/Doctrine/Record/Iterator.php";s:4:"81a7";s:41:"lib/doctrine/Doctrine/Record/Listener.php";s:4:"4232";s:48:"lib/doctrine/Doctrine/Record/State/Exception.php";s:4:"54ee";s:47:"lib/doctrine/Doctrine/Record/Listener/Chain.php";s:4:"b30f";s:51:"lib/doctrine/Doctrine/Record/Listener/Interface.php";s:4:"5974";s:48:"lib/doctrine/Doctrine/Record/Filter/Compound.php";s:4:"ea6f";s:48:"lib/doctrine/Doctrine/Record/Filter/Standard.php";s:4:"0624";s:39:"lib/doctrine/Doctrine/Task/BuildAll.php";s:4:"d3c6";s:43:"lib/doctrine/Doctrine/Task/BuildAllLoad.php";s:4:"9ad0";s:45:"lib/doctrine/Doctrine/Task/BuildAllReload.php";s:4:"0564";s:38:"lib/doctrine/Doctrine/Task/Compile.php";s:4:"15c3";s:39:"lib/doctrine/Doctrine/Task/CreateDb.php";s:4:"0819";s:43:"lib/doctrine/Doctrine/Task/CreateTables.php";s:4:"544e";s:34:"lib/doctrine/Doctrine/Task/Dql.php";s:4:"fff1";s:37:"lib/doctrine/Doctrine/Task/DropDb.php";s:4:"f438";s:39:"lib/doctrine/Doctrine/Task/DumpData.php";s:4:"075d";s:40:"lib/doctrine/Doctrine/Task/Exception.php";s:4:"3e12";s:48:"lib/doctrine/Doctrine/Task/GenerateMigration.php";s:4:"b608";s:51:"lib/doctrine/Doctrine/Task/GenerateMigrationsDb.php";s:4:"3059";s:55:"lib/doctrine/Doctrine/Task/GenerateMigrationsModels.php";s:4:"20d5";s:47:"lib/doctrine/Doctrine/Task/GenerateModelsDb.php";s:4:"fac4";s:49:"lib/doctrine/Doctrine/Task/GenerateModelsYaml.php";s:4:"da9b";s:42:"lib/doctrine/Doctrine/Task/GenerateSql.php";s:4:"c8e0";s:45:"lib/doctrine/Doctrine/Task/GenerateYamlDb.php";s:4:"3648";s:49:"lib/doctrine/Doctrine/Task/GenerateYamlModels.php";s:4:"5f3c";s:39:"lib/doctrine/Doctrine/Task/LoadData.php";s:4:"cac3";s:44:"lib/doctrine/Doctrine/Task/LoadDummyData.php";s:4:"1064";s:38:"lib/doctrine/Doctrine/Task/Migrate.php";s:4:"cad4";s:40:"lib/doctrine/Doctrine/Task/RebuildDb.php";s:4:"de81";s:43:"lib/doctrine/Doctrine/AuditLog/Listener.php";s:4:"de85";s:36:"lib/doctrine/Doctrine/Hook/Equal.php";s:4:"7a09";s:38:"lib/doctrine/Doctrine/Hook/Integer.php";s:4:"7507";s:37:"lib/doctrine/Doctrine/Hook/Parser.php";s:4:"5d36";s:39:"lib/doctrine/Doctrine/Hook/WordLike.php";s:4:"dc65";s:45:"lib/doctrine/Doctrine/Hook/Parser/Complex.php";s:4:"bc67";s:46:"lib/doctrine/Doctrine/Validator/Creditcard.php";s:4:"3e6c";s:40:"lib/doctrine/Doctrine/Validator/Date.php";s:4:"b090";s:42:"lib/doctrine/Doctrine/Validator/Driver.php";s:4:"25e8";s:41:"lib/doctrine/Doctrine/Validator/Email.php";s:4:"0cd5";s:46:"lib/doctrine/Doctrine/Validator/ErrorStack.php";s:4:"3d0f";s:45:"lib/doctrine/Doctrine/Validator/Exception.php";s:4:"c2e5";s:42:"lib/doctrine/Doctrine/Validator/Future.php";s:4:"fe25";s:45:"lib/doctrine/Doctrine/Validator/Htmlcolor.php";s:4:"bc99";s:38:"lib/doctrine/Doctrine/Validator/Ip.php";s:4:"7f13";s:45:"lib/doctrine/Doctrine/Validator/Minlength.php";s:4:"d625";s:43:"lib/doctrine/Doctrine/Validator/Nospace.php";s:4:"df7e";s:44:"lib/doctrine/Doctrine/Validator/Notblank.php";s:4:"8f96";s:43:"lib/doctrine/Doctrine/Validator/Notnull.php";s:4:"7a34";s:40:"lib/doctrine/Doctrine/Validator/Past.php";s:4:"6013";s:45:"lib/doctrine/Doctrine/Validator/Protected.php";s:4:"f842";s:41:"lib/doctrine/Doctrine/Validator/Range.php";s:4:"9998";s:44:"lib/doctrine/Doctrine/Validator/Readonly.php";s:4:"9f1d";s:42:"lib/doctrine/Doctrine/Validator/Regexp.php";s:4:"d65e";s:40:"lib/doctrine/Doctrine/Validator/Time.php";s:4:"bf42";s:45:"lib/doctrine/Doctrine/Validator/Timestamp.php";s:4:"16dc";s:42:"lib/doctrine/Doctrine/Validator/Unique.php";s:4:"4a6d";s:44:"lib/doctrine/Doctrine/Validator/Unsigned.php";s:4:"6510";s:43:"lib/doctrine/Doctrine/Validator/Usstate.php";s:4:"fc6d";s:42:"lib/doctrine/Doctrine/RawSql/Exception.php";s:4:"5ac7";s:44:"lib/doctrine/Doctrine/DataDict/Exception.php";s:4:"4f93";s:43:"lib/doctrine/Doctrine/DataDict/Firebird.php";s:4:"a959";s:43:"lib/doctrine/Doctrine/DataDict/Informix.php";s:4:"1c56";s:40:"lib/doctrine/Doctrine/DataDict/Mssql.php";s:4:"b19d";s:40:"lib/doctrine/Doctrine/DataDict/Mysql.php";s:4:"3ba2";s:41:"lib/doctrine/Doctrine/DataDict/Oracle.php";s:4:"bfa0";s:40:"lib/doctrine/Doctrine/DataDict/Pgsql.php";s:4:"ac30";s:41:"lib/doctrine/Doctrine/DataDict/Sqlite.php";s:4:"62c0";s:37:"lib/doctrine/Doctrine/Adapter/Db2.php";s:4:"5daf";s:43:"lib/doctrine/Doctrine/Adapter/Exception.php";s:4:"f85e";s:43:"lib/doctrine/Doctrine/Adapter/Interface.php";s:4:"7052";s:38:"lib/doctrine/Doctrine/Adapter/Mock.php";s:4:"e45f";s:40:"lib/doctrine/Doctrine/Adapter/Mysqli.php";s:4:"4d80";s:40:"lib/doctrine/Doctrine/Adapter/Oracle.php";s:4:"2947";s:43:"lib/doctrine/Doctrine/Adapter/Statement.php";s:4:"59a1";s:53:"lib/doctrine/Doctrine/Adapter/Statement/Interface.php";s:4:"b74a";s:48:"lib/doctrine/Doctrine/Adapter/Statement/Mock.php";s:4:"082c";s:38:"lib/doctrine/Doctrine/Sequence/Db2.php";s:4:"a32c";s:44:"lib/doctrine/Doctrine/Sequence/Exception.php";s:4:"9a5b";s:43:"lib/doctrine/Doctrine/Sequence/Firebird.php";s:4:"ece5";s:43:"lib/doctrine/Doctrine/Sequence/Informix.php";s:4:"044c";s:40:"lib/doctrine/Doctrine/Sequence/Mssql.php";s:4:"9f7a";s:40:"lib/doctrine/Doctrine/Sequence/Mysql.php";s:4:"4256";s:41:"lib/doctrine/Doctrine/Sequence/Oracle.php";s:4:"5352";s:40:"lib/doctrine/Doctrine/Sequence/Pgsql.php";s:4:"e0d4";s:41:"lib/doctrine/Doctrine/Sequence/Sqlite.php";s:4:"2380";s:43:"lib/doctrine/Doctrine/Hydrator/Abstract.php";s:4:"4594";s:46:"lib/doctrine/Doctrine/Hydrator/ArrayDriver.php";s:4:"224f";s:44:"lib/doctrine/Doctrine/Hydrator/Exception.php";s:4:"1007";s:47:"lib/doctrine/Doctrine/Hydrator/RecordDriver.php";s:4:"df05";s:41:"lib/doctrine/Doctrine/Pager/Exception.php";s:4:"db89";s:38:"lib/doctrine/Doctrine/Pager/Layout.php";s:4:"1f54";s:37:"lib/doctrine/Doctrine/Pager/Range.php";s:4:"ebd8";s:45:"lib/doctrine/Doctrine/Pager/Range/Jumping.php";s:4:"1fe8";s:45:"lib/doctrine/Doctrine/Pager/Range/Sliding.php";s:4:"3b58";s:43:"lib/doctrine/Doctrine/Migration/Builder.php";s:4:"7689";s:45:"lib/doctrine/Doctrine/Migration/Exception.php";s:4:"ba4b";s:66:"lib/doctrine/Doctrine/Migration/IrreversibleMigrationException.php";s:4:"41d3";s:43:"lib/doctrine/Doctrine/Migration/Process.php";s:4:"a0a8";s:36:"lib/doctrine/Doctrine/File/Index.php";s:4:"ac11";s:41:"lib/doctrine/Doctrine/Table/Exception.php";s:4:"269c";s:42:"lib/doctrine/Doctrine/Table/Repository.php";s:4:"4b8e";s:52:"lib/doctrine/Doctrine/Table/Repository/Exception.php";s:4:"baad";s:41:"lib/doctrine/Doctrine/Search/Analyzer.php";s:4:"2ea0";s:42:"lib/doctrine/Doctrine/Search/Exception.php";s:4:"0e62";s:37:"lib/doctrine/Doctrine/Search/File.php";s:4:"9583";s:40:"lib/doctrine/Doctrine/Search/Indexer.php";s:4:"de70";s:41:"lib/doctrine/Doctrine/Search/Listener.php";s:4:"d3ba";s:39:"lib/doctrine/Doctrine/Search/Parser.php";s:4:"f008";s:38:"lib/doctrine/Doctrine/Search/Query.php";s:4:"3f5c";s:39:"lib/doctrine/Doctrine/Search/Record.php";s:4:"30ac";s:39:"lib/doctrine/Doctrine/Search/Scorer.php";s:4:"0e32";s:51:"lib/doctrine/Doctrine/Search/Analyzer/Exception.php";s:4:"8d6b";s:51:"lib/doctrine/Doctrine/Search/Analyzer/Interface.php";s:4:"f9ae";s:50:"lib/doctrine/Doctrine/Search/Analyzer/Standard.php";s:4:"d3ca";s:44:"lib/doctrine/Doctrine/Search/Indexer/Dir.php";s:4:"2a68";s:50:"lib/doctrine/Doctrine/Search/Indexer/Exception.php";s:4:"9838";s:42:"lib/doctrine/Doctrine/Export/Exception.php";s:4:"58ca";s:41:"lib/doctrine/Doctrine/Export/Firebird.php";s:4:"55f3";s:42:"lib/doctrine/Doctrine/Export/Frontbase.php";s:4:"782b";s:41:"lib/doctrine/Doctrine/Export/Informix.php";s:4:"cfe7";s:38:"lib/doctrine/Doctrine/Export/Mssql.php";s:4:"81db";s:38:"lib/doctrine/Doctrine/Export/Mysql.php";s:4:"c86a";s:39:"lib/doctrine/Doctrine/Export/Oracle.php";s:4:"d4db";s:38:"lib/doctrine/Doctrine/Export/Pgsql.php";s:4:"6f66";s:41:"lib/doctrine/Doctrine/Export/Reporter.php";s:4:"e01e";s:39:"lib/doctrine/Doctrine/Export/Schema.php";s:4:"d4d0";s:39:"lib/doctrine/Doctrine/Export/Sqlite.php";s:4:"4093";s:29:"pi1/class.tx_doctrine_pi1.php";s:4:"13cc";s:17:"pi1/locallang.xml";s:4:"3e26";s:19:"doc/wizard_form.dat";s:4:"d165";s:20:"doc/wizard_form.html";s:4:"a1d3";}',
);

?>