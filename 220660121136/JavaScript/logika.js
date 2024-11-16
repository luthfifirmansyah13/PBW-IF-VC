// Operator AND (&&)
const isAdult = true;
const hasID = true;

if (isAdult && hasID) {
  console.log("Anda boleh masuk.");
} else {
  console.log("Anda tidak diizinkan masuk.");
}

// Operator OR (||)
const isWeekend = false;
const isHoliday = true;

if (isWeekend || isHoliday) {
  console.log("Hari ini adalah hari libur.");
} else {
  console.log("Hari ini adalah hari kerja.");
}

// Operator NOT (!)
const isMember = false;

if (!isMember) {
  console.log("Anda bukan member.");
} else {
  console.log("Selamat datang, member!");
}