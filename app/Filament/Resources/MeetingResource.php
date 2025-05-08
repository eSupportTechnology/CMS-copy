<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MeetingResource\Pages;
use App\Filament\Resources\MeetingResource\RelationManagers;
use App\Models\Meeting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;

class MeetingResource extends Resource
{
    protected static ?string $model = Meeting::class;
    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';
    protected static ?int $navigationSort = 5;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('inquiry_id')
                    ->relationship('inquiry', 'id')
                    ->label('Inquiry ID')
                    ->preload()
                    ->required()
                    ->searchable(),

                DateTimePicker::make('meeting_date')
                    ->label('Meeting Date & Time')
                    ->required(),

                Select::make('meeting_location')
                    ->options([
                        'online' => 'Online',
                        'onsite' => 'Onsite',
                    ])
                    ->required(),

                Select::make('meeting_status')
                    ->options([
                        'scheduled' => 'Scheduled',
                        'held' => 'Held',
                        'missed' => 'Missed',
                    ])
                    ->default('scheduled')
                    ->required(),

                Textarea::make('notes')
                    ->label('Meeting Notes')
                    ->rows(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('inquiry.id')->label('Inquiry ID'),
                TextColumn::make('meeting_date')->dateTime()->label('Meeting Date'),
                TextColumn::make('meeting_location')->label('Location')->badge(),
                TextColumn::make('meeting_status')->label('Status')->badge(),
                TextColumn::make('created_at')->label('Created')->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMeetings::route('/'),
            'create' => Pages\CreateMeeting::route('/create'),
            'edit' => Pages\EditMeeting::route('/{record}/edit'),
        ];
    }
}
