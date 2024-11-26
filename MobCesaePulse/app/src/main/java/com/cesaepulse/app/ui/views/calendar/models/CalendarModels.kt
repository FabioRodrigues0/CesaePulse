package com.cesaepulse.app.ui.views.calendar.models

import java.time.LocalDate

class CalendarModels()

enum class WorkType(val value: String) {
	ONLINE("ONLINE"),
	OFFICE("OFFICE")
}

data class WorkDay(
	val day: String,
	val beginHour: Int,
	val endHour: Int,
	val eventDescription: String? = null,
	val workType: WorkType,
)

data class CalendarDay(
	val date: LocalDate,
	val isCurrentMonth: Boolean,
	val hasEvent: Boolean = false,
	val eventDescription: String? = null
)

data class CalendarMonth(
	val year: Int,
	val month: Int,
	val days: List<CalendarDay>
)