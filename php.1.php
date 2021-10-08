//判断明天日期
#include <stdio.h>
#include <stdbool.h>

struct date {
	int year;
	int month;
	int day;
};
bool isleap(struct date today);
int numberofdays(struct date today);

int main() {
	struct date today, tomorrow;

	printf("请输入今天的日期(年)(月)(日)\n");
	scanf("%i %i %i", &today.year, &today.month, &today.day );
	if (today.day != numberofdays(today)) {
		tomorrow.day = today.day + 1;
		tomorrow.month = today.month ;
		tomorrow.year = today.year ;
	} else if (today.month == 12 && today.day == numberofdays(today)) {
		tomorrow.day = 1;
		tomorrow.month = 1;
		tomorrow.year = today.year + 1;
	} else {
		tomorrow.day = 1;
		tomorrow.month = today.month + 1;
		tomorrow.year = today.year ;
	}
	printf("明天的日期为\n%i %i %i", tomorrow);
	return 0;
}

int numberofdays(struct date today) {
	int days;
	int month[12] = {31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31};
	if (today.month == 2 && isleap(today)) {
		days = 29;
	} else {
		days = month[today.month - 1];

		return days;
	}
}

bool isleap(struct date today) {
	bool leap = false;

	if ((today.year % 4 == 0 && today.year % 100 != +0) || today.year % 400 == 0) {
		leap = true;
	}
	return leap;
}
