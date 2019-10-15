<?php

$route = new Route();

//---------------- Route --------------- //

$route->url("/",      "home");
$route->url("login",  "home", "login");
$route->url("logout", "home", "logout");
$route->url("realtime/:nim/:registrasi/:webhook?", "home", "realtime");
$route->url("error/:type", "home", "error");

$route->url("home", "admin", "home");
$route->url("persetujuan_event",       	"admin", "eventApproval");
$route->url("persetujuan_organisasi",   "admin", "organizationApproval");
$route->url("detail_organisasi/:id",    "admin", "organizationDetail");
$route->url("detail_persetujuan/:id",   "admin", "approvalDetail");
$route->url("approve_event/:id", 		"admin", "approveEvent");
$route->url("approve_organization/:id", "admin", "approveOrganization");
$route->url("hapus_organisasi/:id", 	"admin", "deleteOrganization");

$route->url("daftar",  		"organization", "registration");
$route->url("register", 	"organization", "register");
$route->url("cek_username", "organization", "checkUsername");
$route->url("lihat_organisasi/:id", "organization", "showOrganization");
$route->url("lihat_registrasi/:id", "organization", "showRegistration");
$route->url("lihat_anggota/:nim", 	"organization", "memberDetail");
$route->url("tambah_registrasi", 	"organization", "addRegistration");
$route->url("dokumentasi_api", 	    "organization", "apiDocumentation");
$route->url("tambah_url", 			"organization", "addURL");
$route->url("hapus_registrasi/:id", "organization", "deleteRegistration");
$route->url("hapus_anggota/:nim",   "organization", "deleteMember");
$route->url("download_csv", 		"organization", "downloadCSV");
$route->url("data_tambahan/:id",	"organization", "additionalData");
$route->url("halaman_pendaftar/:id",	   "organization", "additionalDataMember");
$route->url("tambah_data_tambahan",        "organization", "addAdditional");
$route->url("tambah_data_tambahan_member", "organization", "addAdditionalMember");
$route->url("hapus_tambahan/:data",		   "organization", "deleteAdditional");
$route->url("proses_tambah_registrasi",    "organization", "processAddRegistration");

//--------------- Restful -----------------//

$route->url("verifikasi_registrasi", "api", "verifyRegistration");
$route->url("verifikasi_key",   "api", "verifyKey");
$route->url("new_member",       "api", "newMember");
$route->url("new_member_bc",    "api", "newMemberBC");
$route->url("api/get/:key",     "api", "getMembers");
$route->url("api/delete",	    "api", "deleteMember");
$route->url("getStudent/:id/:nim",	"api", "getStudentAPI");
$route->url("getMembers/:id/:nim",	"api", "getMembersAPI");
$route->url("decryptNIM",			"api", "decrypt");
$route->url("get_webhook",  "home", "getWebhook");
$route->url("read_webhook", "home", "readWebhook");